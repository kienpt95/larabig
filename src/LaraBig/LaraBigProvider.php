<?php

namespace Smartosc\LaraBig;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client as GuzzleClient;
use Smartosc\LaraBig\Http\Middleware\ValidatePayload;
use Smartosc\LaraBig\Http\Middleware\ValidateWebhook;
use Smartosc\LaraBig\Http\Middleware\XFrameAllowAll;

class LaraBigProvider extends ServiceProvider
{
    private $routeMiddleware = [
        'larabig.auth.admin' => ValidatePayload::class,
        'larabig.auth.webhook' => ValidateWebhook::class,
        'larabig.x-frame-all' => XFrameAllowAll::class
    ];

    public function boot()
    {
        $this->bootRoutes();
        $this->bootViews();
        $this->bootConfig();
        $this->bootDatabase();
        //        $this->bootJobs();
        //        $this->bootObservers();
        $this->bootMiddleware();
    }

    public function register()
    {
        $this->app->singleton(
            'httpClient', function ($app) {
                return new GuzzleClient();
            }
        );

        $this->mergeConfigFrom(__DIR__ . '/resources/config/larabig.php', 'larabig');
    }

    private function bootRoutes() : void
    {
        $this->loadRoutesFrom(__DIR__.'/resources/routes.php');
    }

    private function bootViews() : void
    {
        // Views
        $this->loadViewsFrom(
            __DIR__.'/resources/views',
            'larabig'
        );

        // Views publish
        $this->publishes(
            [
                __DIR__.'/resources/views' => resource_path('views/vendor/larabig'),
            ],
            'larabig-views'
        );
    }

    private function bootConfig() : void
    {
        // Config publish
        $this->publishes(
            [
                __DIR__.'/resources/config/larabig.php' => "{$this->app->configPath()}/larabig.php",
            ],
            'larabig-config'
        );
    }

    private function bootDatabase() : void
    {
        // Database migrations
        if ($this->app['config']->get('larabig.manual_migrations')) {
            $this->publishes(
                [
                    __DIR__.'/resources/database/migrations' => "{$this->app->databasePath()}/migrations",
                ],
                'larabig-migrations'
            );
        } else {
            $this->loadMigrationsFrom(__DIR__.'/resources/database/migrations');
        }
    }

    private function bootMiddleware(): void
    {
        foreach ($this->routeMiddleware as $key => $middleware) {
            $this->app['router']->aliasMiddleware($key, $middleware);
        }
    }
}
