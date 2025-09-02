<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WordSearchWord extends Model
{
    //
    protected $fillable = [
        'word',
    ];

    public function puzzle() : BelongsTo
    {
        return $this->belongsTo(Puzzle::class);
    }
}
