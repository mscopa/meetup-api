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
        'last_name',
        'preferred_name',
        'gender',
        'phone',
        'email',
        'contact_name',
        'email_contact_name',
        'phone_contact_name',
        'contact_name_two',
        'email_contact_name_two',
        'phone_contact_name_two',
        'age',
        'stake',
        'ward',
        'bishop_email',
        'bishop_name',
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
