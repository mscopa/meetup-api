<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityDetail extends Model
{
    //
    protected $guarded = []; // Permite asignación masiva

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
    public function activityDetailContents(): HasMany
    {
        return $this->hasMany(ActivityDetailContent::class);
    }
}
