<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(Request $request)
    {
        // Obtenemos el ID de la sesión del meetup del usuario autenticado.
        $meetupSessionId = $request->user()->meetup_session_id;

        // Usamos whereHas para filtrar las compañías.
        // Esto solo traerá las compañías que tengan una relación 'user'
        // y que, dentro de esa relación, el 'meetup_session_id' coincida.
        $companies = Company::whereHas('user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->orderByDesc('score') // Ordenar por puntaje (descendente)
        ->get(['id', 'name', 'number', 'score', 'coins']); // Solo traemos los datos necesarios

        // Retornamos la respuesta en formato JSON.
        return response()->json(['data' => $companies]);
    }
}
