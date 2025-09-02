<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    //
    protected $guarded = [];

     public function meetupSession(): BelongsTo
    {
        return $this->belongsTo(MeetupSession::class);
    }   

    public function activityDetails(): HasMany
    {
        return $this->hasMany(ActivityDetail::class);
    }
}
