<?php

namespace App\Providers;

use App\Conversation;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-conversation', function(User $user, Conversation $conversation) {
        //     return $conversation->user->is($user);
        // });
        

        // setting admin authorization globally so now admin can do anything
        // Gate::before(function (User $user) {
        //     if ($user->id === 1) { // admin
        //         return true;
        //     }
        // });

        Gate::before(function ($user, $ability) {
            return $user->abilities()->contains($ability);
        });
    }
}
