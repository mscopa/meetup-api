<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        // El auto-descubrimiento de Policies ya funciona, no tocamos nada ahí.

        // --- DEFINIMOS NUESTRAS HABILIDADES (GATES) ---

        // Habilidad para realizar el check-in
        Gate::define('perform-check-in', function ($user) {
            if (!$user->administrator) return false;
            return in_array($user->administrator->role, ['Checkin', 'Matrimonio Director']);
        });

        // Habilidad para crear anuncios
        Gate::define('create-announcement', function ($user) {
            if (!$user->administrator) return false;
            return in_array($user->administrator->role, ['Facilitador', 'Matrimonio Director']);
        });

        // Habilidad para asignar puntos
        Gate::define('assign-points', function ($user) {
            if (!$user->administrator) return false;
            return in_array($user->administrator->role, ['Facilitador', 'Matrimonio Director']);
        });

        // Habilidad para gestionar canjes de productos
        Gate::define('manage-store', function ($user) {
            if (!$user->administrator) return false;
            // Damos este permiso solo al Matrimonio Director
            return in_array($user->administrator->role, ['Matrimonio Director', 'Caja']);
        });
    }
}
