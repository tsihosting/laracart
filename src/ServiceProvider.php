<?php

namespace TsiHosting\LaraCart;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * ServiceProvider for Laravel
 *
 * Class ServiceProvider
 * @package TsiHosting\LaraCart
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the provider.
     */
    public function
    boot()
    {
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Cart::class, function ($app) {
            return new Cart($app['session']);
        });

        $this->app->alias(Cart::class, 'Cart');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Cart::class, 'Cart'
        ];
    }
}