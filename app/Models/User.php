<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Enums\UserRole;
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
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'gender',
        'dietary_conditions',
        'medical_conditions',
        'tshirt_size',
        'approval_status',
        'role',
        'attended',
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
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
        ];
    }

    /**
     * Get the meetup session that owns the user.
     */
    public function meetupSession() : BelongsTo
    {
        return $this->belongsTo(MeetupSession::class);
    }
    public function puzzleAttempts() : HasMany
    {
        return $this->hasMany(UserPuzzleAttempt::class);
    }
    public function participations(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
    public function participation(): HasOne
    {
        return $this->hasOne(Participant::class);
    }
    protected function company(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->participation?->company,
        );
    }
}
