<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Administrator extends Model
{
    //
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'role',
    ];
    
    public function user() : BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function earnings() : HasMany
    {
        return $this->hasMany(Earning::class);
    }
    public function announcements() : HasMany
    {
        return $this->hasMany(Announcement::class);
    }
}
