<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductTransaction extends Model
{
    //
    protected $fillable = [
        'product_id',
        'counselor_id',
        'quantity',
        'total_price',
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function counselor() : BelongsTo
    {
        return $this->belongsTo(Counselor::class);
    }
}
