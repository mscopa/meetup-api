<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        
    ];
    public function puzzles()
    {
        return $this->belongsToMany(Puzzle::class, 'company_puzzles')
                    ->withPivot('is_unlocked', 'timestamps');
    }
}
