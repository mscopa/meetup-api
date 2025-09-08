<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{

    protected $fillable = [
        'administrator_id',
        'title',
        'message',
    ];

    public function administrator() : BelongsTo
    {
        return $this->belongsTo(Administrator::class);
    }
    /**
     * Scope a query to only include announcements for a given meetup session.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $meetupSessionId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForSession(Builder $query, int $meetupSessionId): Builder
    {
        return $query->whereHas('administrator.user', function ($q) use ($meetupSessionId) {
            $q->where('meetup_session_id', $meetupSessionId);
        });
    }
}
