<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductTransaction;
use Illuminate\Http\Request;

class TransactionRetrievalController extends Controller
{
    public function verify(Request $request, string $code)
    {
        if (!$request->user()->tokenCan('manage-store')) {
            abort(403, 'No autorizado.');
        }


        $transaction = ProductTransaction::with('product', 'counselor.company')
            ->where('retrieval_code', strtoupper($code))
            ->first();

        if (!$transaction) {
            return response()->json(['message' => 'Código no encontrado.'], 404);
        }

        return response()->json($transaction);
    }

    public function redeem(Request $request, string $code)
    {
        if (!$request->user()->tokenCan('manage-store')) {
            abort(403, 'No autorizado.');
        }

        $transaction = ProductTransaction::where('retrieval_code', strtoupper($code))->firstOrFail();

        if ($transaction->status === 'retrieved') {
            return response()->json(['message' => 'Este código ya fue canjeado.'], 409);
        }

        $transaction->update(['status' => 'retrieved']);

        return response()->json(['message' => 'Producto entregado y código canjeado con éxito.']);
    }
}
