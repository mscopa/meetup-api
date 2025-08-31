<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserPuzzleAttempt;
use Illuminate\Auth\Access\Response;

class UserPuzzleAttemptPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserPuzzleAttempt $userPuzzleAttempt): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserPuzzleAttempt $userPuzzleAttempt): bool
    {
        // El usuario solo puede actualizar el intento si es SUYO.
        return $user->id === $userPuzzleAttempt->user_id;
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserPuzzleAttempt $userPuzzleAttempt): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserPuzzleAttempt $userPuzzleAttempt): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserPuzzleAttempt $userPuzzleAttempt): bool
    {
        return false;
    }
}
