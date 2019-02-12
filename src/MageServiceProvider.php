<?php

namespace Omatech\Mage;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Providers\ViewServiceProvider;
use Omatech\Mage\App\Providers\PublishServiceProvider;
use Omatech\Mage\App\Providers\RoutingServiceProvider;
use Omatech\Mage\App\Providers\ConfigurationServiceProvider;
use Omatech\Mage\App\Providers\SpatiePermissionsServiceProvider;

class MageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application service providers.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(ConfigurationServiceProvider::class);
        $this->app->register(PublishServiceProvider::class);
        $this->app->register(ViewServiceProvider::class);
        $this->app->register(RoutingServiceProvider::class);

        $this->app->register(SpatiePermissionsServiceProvider::class);
    }

    public function provides()
    {
        return ['mage'];
    }
}