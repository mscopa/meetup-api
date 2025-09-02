<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    //
    protected $fillable = [
        'reason',
        'coin_amount',
        'score_amount',
    ];

}
