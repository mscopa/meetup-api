<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPuzzleAttempt extends Model
{
    //
    protected $fillable = [
        'user_id',
        'puzzle_id',
        'started_at',
        'completed_at',
        'duration_seconds',
        'is_completed',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function puzzle()
    {
        return $this->belongsTo(Puzzle::class);
    }
}
