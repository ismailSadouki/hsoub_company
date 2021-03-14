<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Http\ViewComposers\SettingComposer');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['layouts.app','home.index'], 'App\Http\ViewComposers\SettingComposer'
        );
        
        \Blade::if('admin',function(){
            return auth()->check() && auth()->user()->isAdmin();
        });
    }
}
