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
        if (!Auth::attempt($request->only('username', 'password'))) {
            throw ValidationException::withMessages([
                'username' => ['Las credenciales proporcionadas son incorrectas.'],
            ]);
        }

        $user = $request->user();
        
        $abilities = []; 
        if ($user->administrator) {
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
            $abilities = [ 'view-schedule', 'view-puzzles', 'view-company-details', 'view-store' ];
        }

        $user->tokens()->delete(); 
        $token = $user->createToken('auth-token', $abilities)->plainTextToken;

        return response()->json([
            'message' => '¡Login exitoso!',
            'user' => new UserResource($user->load(['administrator', 'company'])),
            'token' => $token,
        ]);
    }
     public function me(Request $request)
    {
        $user = $request->user();

        $user->load('administrator', 'company');

        $gateAbilities = [];
        $allGateAbilities = [
            'perform-check-in',
            'create-announcement',
            'assign-points',
            'manage-store',
        ];

        foreach ($allGateAbilities as $ability) {
            if ($user->can($ability)) {
                $gateAbilities[] = $ability;
            }
        }

        $tokenAbilities = $user->currentAccessToken()->abilities;

        $allUserAbilities = array_unique(array_merge($gateAbilities, $tokenAbilities));

        return response()->json([
            'data' => $user, 
            'meta' => [
                'abilities' => $allUserAbilities
            ]
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => '¡Logout exitoso!']);
    }
}
