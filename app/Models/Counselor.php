<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Counselor extends Model
{
    //
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'type',
        'gender',
        'dietary_restrictions',
        'medical_conditions',
        'tshirt_size',
        'approval_status',
        'attended',
        'checkin',
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
