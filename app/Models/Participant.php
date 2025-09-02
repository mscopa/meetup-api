<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use hasFactory;
    //
    protected $fillable = [
        'company_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'dietary_restrictions',
        'medical_conditions',
        'tshirt_size',
        'approval_status',
        'attended',
        'is_member',
        'kit_delivered',
    ];
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
