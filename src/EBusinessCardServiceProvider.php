<?php

namespace Vcian\EbusinessCard;


use Illuminate\Support\ServiceProvider;

class EbusinessCardServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
//        $this->loadViewsFrom(__DIR__.'/views', 'Vcian\EbusinessCard');
    }

    /**
     * Register any application services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make(EBusinessCardController::class);
        $this->publishes([
            __DIR__.'/views' => resource_path('views/ebusinesscard/'),
            __DIR__.'/assets' => public_path('ebusinesscards/'),
        ]);
    }

}
