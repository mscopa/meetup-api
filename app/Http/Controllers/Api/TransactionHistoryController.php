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
        if (!$request->user()->tokenCan('view-history')) {
            return response()->json(['message' => 'No autorizado.'], 403);
        }

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

        $transactions = ProductTransaction::whereHas('counselor', function ($query) use ($company) {
            $query->where('company_id', $company->id);
        })
        ->with('product')
        ->latest('created_at')
        ->get();

        return TransactionResource::collection($transactions);
    }
}
