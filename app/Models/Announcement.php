<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{
    //
    protected $fillable = [
        'administrator_id',
        'title',
        'message',
        'created_at',
    ];

    public function administrator() : BelongsTo
    {
        return $this->belongsTo(Administrator::class);
    }
}
