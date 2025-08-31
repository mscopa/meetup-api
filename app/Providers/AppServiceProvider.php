<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Company;
use App\Enums\UserRole;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // En AuthServiceProvider.php
        Gate::define('activate-puzzle-for-company', function (User $user, Company $company) {
            if ($user->role !== UserRole::Consejero) {
                return false;
            }
            // Un consejero solo puede activar puzzles para SU compañía.
            return $user->company_id === $company->id;
        });
    }
}
