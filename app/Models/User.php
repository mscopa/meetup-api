<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'meetup_session_id',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * Get the meetup session that owns the user.
     */
    public function meetupSession() : BelongsTo
    {
        return $this->belongsTo(MeetupSession::class);
    }
    protected function administrator(): HasOne
    {
        return $this->hasOne(Administrator::class);
    }
    protected function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
    public function puzzles(): HasMany
    {
        return $this->hasMany(Puzzle::class);
    }
    public function counselors(): HasManyThrough
    {
        return $this->hasManyThrough(Counselor::class, Company::class);
    }
}
