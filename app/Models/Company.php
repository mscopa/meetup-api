<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use hasFactory;
    //
    protected $fillable = [
        'user_id',
        'name',
        'number',
        'war_cry',
        'score',
        'coins',
        'room'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
    public function counselors(): HasMany
    {
        return $this->hasMany(Counselor::class);
    }
    public function earnings(): HasMany
    {
        return $this->hasMany(Earning::class);
    }
}
