<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Puzzle extends Model
{
    use hasFactory;
    //
    protected $fillable = [
        'title',
        'description',
        'type',
        'is_enabled'
    ];
    
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function crossword_words(): HasMany
    {
        return $this->hasMany(CrosswordWord::class);
    }
    public function word_search_words(): HasMany
    {
        return $this->hasMany(WordSearchWord::class);
    }
}
