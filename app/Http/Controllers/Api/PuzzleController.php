<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Puzzle;
use Illuminate\Http\Request;
use App\Enums\UserRole;

class PuzzleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $user = $request->user();
        // Solo los participantes pueden ver la lista de puzzles para jugar.
        if ($user->role !== UserRole::Participante) {
            // Devolvemos una lista vacía o un mensaje de error.
            return response()->json(['message' => 'Solo los participantes pueden acceder a los puzzles.'], 403);
        }

        // Obtenemos la compañía del participante.
        $company = $user->company;
        if (!$company) {
            return response()->json(['puzzles' => []]); // No tiene compañía, no ve puzzles.
        }

        // Obtenemos los puzzles desbloqueados para esa compañía
        // 'puzzles' es la relación que definimos en el modelo Company
        $unlockedPuzzles = $company->puzzles()->wherePivot('is_unlocked', true)->get();

        return response()->json($unlockedPuzzles);
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
    public function show(Puzzle $puzzle)
    {
        //
        return response()->json($puzzle);
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
}
