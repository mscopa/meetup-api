<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityDetailContent extends Model
{
    //
    protected $guarded = [];
    
    public function activityDetail() : BelongsTo
    {
        return $this->belongsTo(ActivityDetail::class);
    }
}
