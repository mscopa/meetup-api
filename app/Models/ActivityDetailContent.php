<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityDetailContent extends Model
{
    //
    protected $guarded = []; // Permite asignación masiva
    
    public function activityDetail()
    {
        return $this->belongsTo(ActivityDetail::class);
    }
}
