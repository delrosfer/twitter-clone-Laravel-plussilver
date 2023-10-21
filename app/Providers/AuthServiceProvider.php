<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Idea;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //Role
        Gate::define('admin', function(User $user): bool{
            return (bool) $user->is_admin;
        });

        Gate::define('edit', function(User $user): bool{
            return (bool) $user->is_admin;
        });

        //permission
        /*Gate::define('idea.delete', function (User $user, Idea $idea): bool{
            return ( $user->id === $idea->user_id);
        });

        Gate::define('idea.edit', function (User $user, Idea $idea): bool{
            return ((bool) $user->is_admin || $user->id === $idea->user_id);
        });*/
    }
}
