<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductTransaction;
use Illuminate\Http\Request;

class TransactionRetrievalController extends Controller
{
    /**
     * Verifica un código de retiro y devuelve los detalles de la transacción.
     */
    public function verify(string $code)
    {
        // Esto debería estar protegido para que solo el encargado pueda hacerlo
        // $this->authorize('...'); 

        $transaction = ProductTransaction::with('product', 'counselor.company')
            ->where('retrieval_code', strtoupper($code))
            ->first();

        if (!$transaction) {
            return response()->json(['message' => 'Código no encontrado.'], 404);
        }

        return response()->json($transaction);
    }

    /**
     * Marca una transacción como "retirada".
     */
    public function redeem(string $code)
    {
        // Esto también debería estar protegido
        // $this->authorize('...');

        $transaction = ProductTransaction::where('retrieval_code', strtoupper($code))->firstOrFail();

        if ($transaction->status === 'retrieved') {
            return response()->json(['message' => 'Este código ya fue canjeado.'], 409); // 409 Conflict
        }

        $transaction->update(['status' => 'retrieved']);

        return response()->json(['message' => 'Producto entregado y código canjeado con éxito.']);
    }
}
