<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        try {
            // 1. Validamos que nos envíen email y password
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // 2. Buscamos al usuario por su email
            $user = User::where('email', $request->email)->first();

            // 3. Verificamos que el usuario exista y que la contraseña sea correcta
            if (! $user || ! Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['Las credenciales proporcionadas son incorrectas.'],
                ]);
            }

            // 4. Si todo está bien, creamos un token y lo devolvemos
            $token = $user->createToken('auth-token')->plainTextToken;

            return response()->json([
                'message' => '¡Login exitoso!',
                'user' => $user,
                'role' => $user->role,
                'token' => $token,
            ]);
        } catch (\Throwable $th) {
            return $th;
        }

    }
}
