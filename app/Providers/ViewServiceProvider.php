<?php

namespace App\Providers;

use App\Http\Views\Composers\AsideComposer;
use App\Http\Views\Composers\CategoryComposer;
use App\Models\Contact;
use App\Models\JsonCountry;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Throwable;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['layouts.app'], function ($view)
        {
            try {
                $settings = Setting::where('setting_name', 'social')->first();
            }catch (Throwable)
            {
                $settings = [];
            }
            $view->with(['settings'=> $settings] );
        });

    }
}
