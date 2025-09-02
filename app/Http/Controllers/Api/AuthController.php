<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        // 1. La validación se hace automáticamente por `LoginRequest`.
        // Si falla, ni siquiera entra a este método.

        // 2. Intentamos autenticar al usuario con los datos ya validados.
        if (!Auth::attempt($request->only('username', 'password'))) {
            // Si las credenciales no son correctas, lanzamos una excepción.
            throw ValidationException::withMessages([
                'username' => ['Las credenciales proporcionadas son incorrectas.'],
            ]);
        }
        // 3. Obtenemos el usuario autenticado.
        $user = $request->user();

        // 4. Creamos el token.
        $token = $user->createToken('auth-token')->plainTextToken;

        // 5. Devolvemos una respuesta limpia y segura usando el UserResource.
        return response()->json([
            'message' => '¡Login exitoso!',
            'user' => new UserResource($user), // ¡Aquí está la magia!
            'token' => $token,
        ]);
    }
}
