<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SessionActivity extends Model
{
    //
    protected $guarded = []; // Permite asignación masiva

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
