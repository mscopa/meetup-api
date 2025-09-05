<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CounselorAuthController extends Controller
{
    public function identify(Request $request)
    {
        $request->validate(['pin' => 'required|string']);

        $user = $request->user();

        $counselor = $user->counselors()->where('pin', $request->pin)->first();

        if (!$counselor) {
            throw ValidationException::withMessages([
                'pin' => 'El PIN de consejero es incorrecto o no pertenece a esta compañía.',
            ]);
        }

        $request->user()->currentAccessToken()->delete();
        $token = $user->createToken('counselor-token', [
            'purchase-products',
            'toggle-puzzles',
            'view-history',
            'counselor-id:' . $counselor->id
        ])->plainTextToken;

        return response()->json([
            'message' => '¡Consejero identificado con éxito!',
            'counselor_name' => $counselor->first_name,
            'token' => $token,
        ]);
    }
}
