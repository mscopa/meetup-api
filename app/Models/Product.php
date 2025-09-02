<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'is_active',
    ];

    public function meetupSession() : BelongsTo
    {
        return $this->belongsTo(MeetupSession::class);
    }
}
