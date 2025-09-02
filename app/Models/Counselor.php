<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Counselor extends Model
{
    //
    protected $fillable = [
        'company_id',
        'first_name',
        'middle_name',
        'last_name',
        'pin',
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
    public function productTransactions() : HasMany
    {
        return $this->hasMany(ProductTransaction::class);
    }
}
