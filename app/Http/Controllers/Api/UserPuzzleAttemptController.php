<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Puzzle;
use App\Models\UserPuzzleAttempt;
use Illuminate\Http\Request;

class UserPuzzleAttemptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Puzzle $puzzle)
    {
        //
        $user = $request->user();

        // Verificación: ¿Ya existe un intento para este usuario y puzzle?
        $existingAttempt = UserPuzzleAttempt::where('user_id', $user->id)
                                            ->where('puzzle_id', $puzzle->id)
                                            ->exists();
        if ($existingAttempt) {
            return response()->json(['message' => 'Ya has iniciado un intento para este puzzle.'], 409); // 409 Conflict
        }

        // Si todo está bien, creamos el intento
        $attempt = UserPuzzleAttempt::create([
            'user_id' => $user->id,
            'puzzle_id' => $puzzle->id,
            'started_at' => now(), // Guardamos la hora de inicio
        ]);

        return response()->json([
            'success' => true,
            'message' => '¡Intento iniciado con éxito!',
            'attempt_id' => $attempt->id // Devolvemos el ID del intento para que el frontend lo guarde
        ], 201); // 201 Created
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPuzzleAttempt $userPuzzleAttempt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserPuzzleAttempt $userPuzzleAttempt)
    {
        //
        // Autorización: ¿El usuario que hace la petición es el dueño de este intento?
        // Esto es una medida de seguridad CRUCIAL.
        $this->authorize('update', $userPuzzleAttempt); // --> Para esto crearemos una Policy sencilla

        // Validación: Asegurarnos de que el frontend nos envía los datos necesarios
        $validatedData = $request->validate([
            'duration_seconds' => 'required|integer',
            'is_completed' => 'required|boolean',
        ]);
        
        $userPuzzleAttempt->update([
            'completed_at' => now(),
            'duration_seconds' => $validatedData['duration_seconds'],
            'is_completed' => $validatedData['is_completed'],
        ]);

        return response()->json(['success' => true, 'message' => '¡Intento completado!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPuzzleAttempt $userPuzzleAttempt)
    {
        //
    }
}
