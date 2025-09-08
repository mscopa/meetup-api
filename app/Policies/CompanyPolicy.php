<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Auth\Access\Response;

class CompanyPolicy
{
    public function before(User $user, string $ability): ?bool
    {
        // Si el usuario logueado es un administrador, le damos permiso para todo y no seguimos revisando.
        if ($user->administrator) {
            return true;
        }

        // Si no es un administrador, devolvemos null para que se ejecuten las otras reglas.
        return null;
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Un administrador puede ver la lista de todas las compañías.
        // Un usuario normal (compañía) no puede.
        // La regla 'before' ya se encarga de esto, pero es bueno ser explícito.
        return $user->administrator !== null;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Company $company): bool
    {
        return $user->id === $company->user_id;
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
    public function update(User $user, Company $company): bool
    {
        if (!$user->tokenCan('purchase-products')) {
            return false;
        }

        $counselor = $user->counselors()->first();
        return $counselor && $counselor->company_id === $company->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Company $company): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Company $company): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Company $company): bool
    {
        return false;
    }
}
