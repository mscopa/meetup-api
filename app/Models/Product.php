<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    //
    protected $fillable = [
        'meetup_session_id',
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
    public function productTransactions() : HasMany
    {
        return $this->hasMany(ProductTransaction::class);
    }
}
