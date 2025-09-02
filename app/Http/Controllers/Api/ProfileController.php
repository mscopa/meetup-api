<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProfileHeaderResource;


class ProfileController extends Controller
{
    //
    /**
     * Get header data for the authenticated user's profile.
     *
     * This method checks if the user is a Company or an Administrator
     * and returns the appropriate data structure along with their
     * meetup session information.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getHeaderData(Request $request)
    {
        $user = $request->user();

        $user->load(['company', 'administrator', 'meetupSession']);

        // 3. Verificamos que el usuario tenga un perfil asignado.
        // Esta validación es más clara aquí que dentro del Resource.
        if (!$user->company && !$user->administrator) {
            return response()->json(['message' => 'El perfil del usuario no fue encontrado.'], 404);
        }

        // 4. ¡Listo! Devolvemos el nuevo Resource directamente.
        // Laravel se encargará de convertirlo a JSON con la estructura que definiste.
        return new ProfileHeaderResource($user);
    }
}
