<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Puzzle extends Model
{
    use hasFactory;
    //
    protected $fillable = [
        'title',
        'description',
        'type',
        'content',
    ];
    protected $casts = [
        'content' => 'array',
    ];
    public function companies() :BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_puzzles')
            ->withPivot('is_unlocked')
            ->withTimestamps();
    }
    public function userAttempts()
    {
        return $this->hasMany(UserPuzzleAttempt::class);
    }
}
