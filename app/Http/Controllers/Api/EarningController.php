<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEarningRequest;
use App\Http\Resources\EarningResource;
use App\Models\Company;
use App\Models\Earning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EarningController extends Controller
{
    /**
     * Muestra el historial de todas las ganancias de la sesión.
     */
    public function index(Request $request)
    {
        $meetupSessionId = $request->user()->meetup_session_id;

        // Le decimos: "Traeme los earnings que TIENEN una compañía que TIENE un usuario
        // cuya meetup_session_id sea la del usuario actual."
        $earnings = Earning::whereHas('company.user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->with(['administrator', 'company'])
        ->latest('id')
        ->paginate(10); // Usemos una paginación más corta para probar

        return EarningResource::collection($earnings);
    }

    /**
     * Asigna puntos/monedas a una compañía.
     */
    public function store(StoreEarningRequest $request)
    {
        $validated = $request->validated();
        $administrator = $request->user()->administrator;
        $company = Company::find($validated['company_id']);

        // Usamos una transacción para asegurar la integridad de los datos.
        // Si algo falla, se revierte todo.
        DB::transaction(function () use ($validated, $administrator, $company) {
            // 1. Creamos el registro en la tabla de ganancias
            Earning::create([
                'administrator_id' => $administrator->id,
                'company_id' => $company->id,
                'reason' => $validated['reason'],
                'coin_amount' => $validated['coin_amount'],
                'score_amount' => $validated['score_amount'],
            ]);

            // 2. Actualizamos los totales de la compañía
            $company->increment('coins', $validated['coin_amount']);
            $company->increment('score', $validated['score_amount']);
        });

        return response()->json(['message' => '¡Puntos y monedas asignados con éxito!'], 201);
    }
}
