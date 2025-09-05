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
        'user_id',
        'title',
        'description',
        'type',
        'rows',
        'cols',
        'grid_data',
        'is_enabled'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_enabled' => 'boolean',
        'grid_data'  => 'array', 
        'rows'       => 'integer', 
        'cols'       => 'integer',
    ];
    
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function crosswordWords(): HasMany
    {
        return $this->hasMany(CrosswordWord::class);
    }
    public function wordSearchWords(): HasMany
    {
        return $this->hasMany(WordSearchWord::class);
    }
}
