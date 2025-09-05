<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(Request $request)
    {
        $companies = Company::where('meetup_session_id', $request->user()->meetup_session_id)
            ->orderByDesc('score') // Ordenar primero por puntaje (más alto primero)
            ->get(['id', 'name', 'number', 'score', 'coins']); // Solo traemos los datos necesarios

        // Podríamos usar un API Resource aquí para formatear la salida, pero para empezar, esto es suficiente.
        return response()->json(['data' => $companies]);
    }
}
