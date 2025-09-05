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
        'last_name',
        'preferred_name',
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
