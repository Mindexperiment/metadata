<?php

namespace Agpretto\Metadata;

use Illuminate\Support\ServiceProvider;
use Agpretto\Metadata\Console\Commands\MetadataInstall;

class MetadataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            MetadataInstall::class,
        ]);

        $this->configure();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerResources();
        $this->registerPublishing();
    }

    /**
     * Setup the configuration for Metadata
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/metadata.php', 'metadata'
        );
    }

    /**
     * Register the package resources
     * 
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'metadata');
    }

    /**
     * Register the package's publishable resources
     * 
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/metadata.php' => $this->app->configPath('metadata.php')
            ], 'metadata-configs');

            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/metadata'),
            ], 'metadata-views');
        }
    }
}
