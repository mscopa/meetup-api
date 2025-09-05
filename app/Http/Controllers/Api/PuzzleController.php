<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TogglePuzzleStatusRequest;
use App\Http\Resources\PuzzleResource;
use App\Models\Puzzle;
use App\Services\PuzzleBuilders\CrosswordBuilder;
use App\Services\PuzzleBuilders\WordSearchBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PuzzleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();

        // Construimos la consulta base para los puzzles del usuario.
        $query = Puzzle::where('user_id', $user->id);

        // Verificamos si el token del usuario tiene la habilidad de 'toggle-puzzles'.
        // Esta habilidad se la dimos al consejero cuando se identificó.
        if (!$user->tokenCan('toggle-puzzles')) {
            // Si NO es un consejero, filtramos y mostramos solo los activados.
            $query->where('is_enabled', true);
        }
        
        // Para los consejeros, la condición 'where' no se aplica, por lo que verán todos.
        $puzzles = $query->get();

        return PuzzleResource::collection($puzzles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Puzzle $puzzle)
    {
        if (!$puzzle->is_enabled) {
            abort(403, 'Este puzzle no está activado.');
        }
        $builder = match ($puzzle->type) {
            'Crucigrama'     => new CrosswordBuilder(),
            'Sopa de Letras' => new WordSearchBuilder(),
            default          => abort(501, 'Tipo de puzzle no soportado.')
        };
        $puzzleData = $builder->build($puzzle);
        return response()->json($puzzleData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puzzle $puzzle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puzzle $puzzle)
    {
        //
    }
    public function toggleStatus(TogglePuzzleStatusRequest $request, Puzzle $puzzle)
    {

        $validated = $request->validated();

        $puzzle->update([
            'is_enabled' => $validated['is_enabled'],
        ]);
        return new PuzzleResource($puzzle);
    }
}
