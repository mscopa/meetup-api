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
    public function index(Request $request)
    {
        $meetupSessionId = $request->user()->meetup_session_id;

        $earnings = Earning::whereHas('company.user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->with(['administrator', 'company'])
        ->latest('id')
        ->paginate(10); // Usemos una paginación más corta para probar

        return EarningResource::collection($earnings);
    }

    public function store(StoreEarningRequest $request)
    {
        $validated = $request->validated();
        $administrator = $request->user()->administrator;
        $company = Company::find($validated['company_id']);

        DB::transaction(function () use ($validated, $administrator, $company) {
            Earning::create([
                'administrator_id' => $administrator->id,
                'company_id' => $company->id,
                'reason' => $validated['reason'],
                'coin_amount' => $validated['coin_amount'],
                'score_amount' => $validated['score_amount'],
            ]);

            $company->increment('coins', $validated['coin_amount']);
            $company->increment('score', $validated['score_amount']);
        });

        return response()->json(['message' => '¡Puntos y monedas asignados con éxito!'], 201);
    }
}
