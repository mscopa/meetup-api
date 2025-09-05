<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
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
        $user = $request->user()->load(['administrator', 'company', 'meetupSession']);;

        // 4. Creamos el token.
        $token = $user->createToken('auth-token', [
            'view-schedule',
            'view-puzzles',
            'view-company-details',
            'view-store'
        ])->plainTextToken;

        // 5. Devolvemos una respuesta limpia y segura usando el UserResource.
        return response()->json([
            'message' => '¡Login exitoso!',
            'user' => new UserResource($user), // ¡Aquí está la magia!
            'token' => $token,
        ]);
    }
     public function me(Request $request): UserResource
    {
        $user = $request->user();
        $token = $user->currentAccessToken();

        // Obtenemos las habilidades del token actual. Si no hay token, un array vacío.
        $abilities = $token ? $token->abilities : [];

        // Cargamos las relaciones que siempre queremos mostrar del usuario
        $user->load(['company', 'administrator']);

        // Devolvemos el UserResource y le agregamos la metadata con las habilidades.
        return (new UserResource($user))->additional([
            'meta' => [
                'abilities' => $abilities
            ]
        ]);
    }
    public function logout(Request $request)
    {
        // Revoca el token de API actual del usuario
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => '¡Logout exitoso!']);
    }
}
