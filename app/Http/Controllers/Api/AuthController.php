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
    // Usamos tu LoginRequest, que es la mejor práctica.
    public function login(LoginRequest $request)
    {
        // 1. La validación ya la hizo LoginRequest, perfecto.
        // 2. Intentamos autenticar.
        if (!Auth::attempt($request->only('username', 'password'))) {
            throw ValidationException::withMessages([
                'username' => ['Las credenciales proporcionadas son incorrectas.'],
            ]);
        }

        // 3. Obtenemos el usuario autenticado (tu código ya hacía esto perfecto).
        $user = $request->user();
        
        // 4. --- NUEVO: LÓGICA PARA DETERMINAR LAS HABILIDADES ---
        $abilities = []; // Definimos el array de habilidades
        if ($user->administrator) {
            // Si es admin, construimos su lista de habilidades basadas en su ROL
            $role = $user->administrator->role;
            if ($role === 'Matrimonio Director') {
                $abilities = [ 'perform-check-in', 'create-announcement', 'assign-points', 'manage-store' ];
            } elseif ($role === 'Facilitador') {
                $abilities = ['create-announcement', 'assign-points'];
            } elseif ($role === 'Checkin') {
                $abilities = ['perform-check-in'];
            } elseif ($role === 'Caja') {
                $abilities = ['manage-store'];
            }
        } else {
            // Si no es admin, es una compañía con permisos limitados
            $abilities = [ 'view-schedule', 'view-puzzles', 'view-company-details', 'view-store' ];
        }
        // --- FIN DE LA LÓGICA NUEVA ---

        // 5. Creamos el token CON las habilidades correctas
        $user->tokens()->delete(); // Borramos tokens viejos para mantenerlo limpio
        $token = $user->createToken('auth-token', $abilities)->plainTextToken;

        // 6. Devolvemos una respuesta limpia usando tu UserResource.
        return response()->json([
            'message' => '¡Login exitoso!',
            'user' => new UserResource($user->load(['administrator', 'company'])),
            'token' => $token,
        ]);
    }
     public function me(Request $request)
    {
        $user = $request->user();

        // 1. CARGAMOS LAS RELACIONES PRIMERO (¡ESTE ES EL ARREGLO!)
        // Ahora el objeto $user ya tiene la información de si es admin o compañía.
        $user->load('administrator', 'company');

        // 2. Obtenemos los permisos basados en ROLES (para los Administradores)
        $gateAbilities = [];
        $allGateAbilities = [
            'perform-check-in',
            'create-announcement',
            'assign-points',
            'manage-store',
        ];

        foreach ($allGateAbilities as $ability) {
            // Ahora esta llamada funciona, porque $user->administrator ya está cargado.
            if ($user->can($ability)) {
                $gateAbilities[] = $ability;
            }
        }

        // 3. Obtenemos los permisos directos del TOKEN (para los Consejeros)
        $tokenAbilities = $user->currentAccessToken()->abilities;

        // 4. Combinamos ambos listados y eliminamos duplicados
        $allUserAbilities = array_unique(array_merge($gateAbilities, $tokenAbilities));

        // 5. Devolvemos el usuario y su lista completa de habilidades
        return response()->json([
            'data' => $user, // Ya no necesita el ->load() aquí porque lo hicimos arriba
            'meta' => [
                'abilities' => $allUserAbilities
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
