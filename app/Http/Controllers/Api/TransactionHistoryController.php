<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Counselor;
use App\Models\ProductTransaction;
use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
    public function __invoke(Request $request)
    {
        // 1. Verificamos que el usuario tenga permiso para ver el historial.
        if (!$request->user()->tokenCan('view-history')) {
            return response()->json(['message' => 'No autorizado.'], 403);
        }

        // 2. Obtenemos la compañía del consejero.
        $counselorId = null;
        foreach ($request->user()->currentAccessToken()->abilities as $ability) {
            if (str_starts_with($ability, 'counselor-id:')) {
                $counselorId = explode(':', $ability)[1];
                break;
            }
        }
        
        if (!$counselorId) {
            return response()->json(['message' => 'Identidad de consejero no encontrada.'], 403);
        }

        $company = Counselor::findOrFail($counselorId)->company;

        // 3. Buscamos todas las transacciones de esa compañía a través de sus consejeros.
        $transactions = ProductTransaction::whereHas('counselor', function ($query) use ($company) {
            $query->where('company_id', $company->id);
        })
        ->with('product') // Precargamos los nombres de los productos
        ->latest('created_at') // Ordenamos por más reciente
        ->get();

        return TransactionResource::collection($transactions);
    }
}
