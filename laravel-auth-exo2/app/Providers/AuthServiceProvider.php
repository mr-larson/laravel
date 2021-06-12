<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gate User
        Gate::define('user-create', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        Gate::define('user-edit', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        //Gate About
        Gate::define('about-create', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        Gate::define('about-edit', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        //Gate Chiffre
        Gate::define('chiffre-create', function () {
            return in_array(Auth::user()->role_id, [1,2]);
        });

        Gate::define('chiffre-edit', function () {
            return in_array(Auth::user()->role_id, [1,2]);
        });

        //Gate Hero
        Gate::define('hero-create', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        Gate::define('hero-edit', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        //Gate Service
        Gate::define('service-create', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        Gate::define('service-edit', function () {
            return in_array(Auth::user()->role_id, [1]);
        });

        //Gate Service
        Gate::define('service-create', function () {
            return in_array(Auth::user()->role_id, [1,2,3]);
        });

        Gate::define('service-edit', function () {
            return in_array(Auth::user()->role_id, [1,2,3]);
        });

        //Gate Temoignage
        Gate::define('temoignage', function () {
            return in_array(Auth::user()->role_id, [1,2]);
        });

    }
}
