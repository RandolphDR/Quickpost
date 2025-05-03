<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use App\Models\User;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {
        Gate::define('developer-access', fn(User $user) => Auth::check() && $user->role === 'developer');
        Gate::define('administrator-access', fn(User $user) => Auth::check() && in_array($user->role, ['administrator', 'developer']));
        Gate::define('user-access', fn(User $user) => Auth::check() && $user->role === 'user');
        Gate::define('manage-post', fn(User $user, Post $post) => Gate::allows('administrator-access') || $user->id === $post->user_id);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
