<?php

namespace App\Providers;

use App\Models\CompanyOrder;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('show-order', function (User $user, CompanyOrder $companyOrder) {
            return $user->id === $companyOrder->user_id;
        });

        Gate::define('edit-order', function (User $user, CompanyOrder $companyOrder) {
            return $user->id === $companyOrder->user_id;
        });

        Gate::define('update-order', function (User $user, CompanyOrder $companyOrder) {
            if ($companyOrder->user_can_update != 0) {
                return true;
            }
            return false;
        });
    }
}
