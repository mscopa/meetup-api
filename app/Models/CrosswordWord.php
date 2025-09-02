<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrosswordWord extends Model
{
    //
    protected $fillable = [
        'puzzle_id',
        'word',
        'normalized_word',
        'clue',
        'direction',
        'row',
        'col',
    ];
    public function puzzle()
    {
        return $this->belongsTo(Puzzle::class);
    }
}
