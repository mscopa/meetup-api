<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    //
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_puzzles')
                    ->withPivot('is_unlocked', 'timestamps');
    }
    public function userAttempts()
    {
        return $this->hasMany(UserPuzzleAttempt::class);
    }
}
