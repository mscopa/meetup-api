<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrator extends Model
{
    //
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'role',
    ];
    
    public function user() : BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
