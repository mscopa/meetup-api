<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTransaction extends Model
{
    //
    protected $fillable = [
        'quantity',
        'total_price',
    ];

    
}
