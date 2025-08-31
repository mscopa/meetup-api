<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use hasFactory;
    //
    protected $fillable = [
        'name',
        'number',
        'war_cry',
        'score',
    ];
    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
    public function users(): HasManyThrough
    {
        // "Quiero obtener muchos User a través de Participant"
        return $this->hasManyThrough(User::class, Participant::class);
    }
    public function puzzles() : BelongsToMany
    {
        return $this->belongsToMany(Puzzle::class, 'company_puzzles')
                    ->withPivot('is_unlocked')
                    ->withTimestamps();
    }
}
