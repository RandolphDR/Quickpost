<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {

        Gate::define('developer-access', fn(User $user) => Auth::check() && $user->role === 'developer');
        Gate::define('administrator-access', fn(User $user) => Auth::check() && in_array($user->role, ['administrator', 'developer']));
        Gate::define('user-access', fn(User $user) => Auth::check() && $user->role === 'user');

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
