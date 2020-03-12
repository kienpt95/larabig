<?php

namespace Smartosc\LaraBig;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client as GuzzleClient;
use Smartosc\LaraBig\Http\Middleware\ValidatePayload;
use Smartosc\LaraBig\Http\Middleware\ValidateWebhook;
use Smartosc\LaraBig\Http\Middleware\XFrameAllowAll;

class LaraBigProvider extends ServiceProvider
{
    const PREFIX_API_CONTRACT = 'Smartosc\LaraBig\Contracts\ApiModel';
    const PREFIX_API_MODEL = 'Smartosc\LaraBig\Model\Api';

    private $routeMiddleware = [
        'larabig.auth.admin' => ValidatePayload::class,
        'larabig.auth.webhook' => ValidateWebhook::class,
        'larabig.x-frame-all' => XFrameAllowAll::class
    ];

    private $_apiModelBind = [
        'catalog' => [
            'product' => [
                'bulk_pricing_rule',
                'complex_rule',
                'custom_field',
                'image',
                'meta_field',
                'modifier' =>[
                    'value' => [
                        'image'
                    ]
                ],
                'option' => [
                    'value'
                ],
                'review',
                'variant' => [
                    'image',
                    'metefield'
                ],
                'video'
            ],
            'brand' => [
                'image',
                'metafield'
            ],
            'category' => [
                'image',
                'meta_field',
                'tree'
            ],
            'summary',
            'variant'
        ],
        'content' => [
            'region',
            'script',
            'widget_template'
        ],
        'banner',
        'country' => [
            'state'
        ],
        'coupon',
        'currency',
        'customer' => [
            'address',
            'attribute',
            'attribute_value',
            'consent',
            'form_field',
        ],
        'cart' => [
            'item'
        ]
    ];

    private $_contractBind = [
        [
            'Smartosc\LaraBig\Contracts\BackendModel\StoreInterface',
            'Smartosc\LaraBig\Model\Store'
        ],
        [
            'Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface',
            'Smartosc\LaraBig\Repository\StoreRepository'
        ],
        [
            'Smartosc\LaraBig\Contracts\Repository\AdminRepositoryInterface',
            'Smartosc\LaraBig\Repository\AdminRepository'
        ],
    ];

    public function boot()
    {
        $this->bootRoutes();
        $this->bootViews();
        $this->bootConfig();
        $this->bootDatabase();
        $this->bootMiddleware();
    }

    public function register()
    {
        $this->app->singleton(
            'httpClient',
            function ($app) {
                return new GuzzleClient();
            }
        );
        $this->bindContract();
        $this->bindApiModel($this->_apiModelBind);
        $this->mergeConfigFrom(__DIR__ . '/resources/config/larabig.php', 'larabig');
    }

    private function bindApiModel($bindList, $prefix = '') : void
    {
        foreach ($bindList as $key => $value) {
            $item = is_array($value) ? $key : $value;
            $item = ucwords($item, "_");

            if (!empty($prefix)) {
                $item = $prefix . '\\' . $item;
            }


            $this->app->bind(
                self::PREFIX_API_CONTRACT . '\\' . $item,
                self::PREFIX_API_MODEL . '\\' . $item
            );
            if (is_array($value)) {
                $this->bindApiModel($value, $item);
            }
        }
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

    private function bindContract()
    {
        foreach ($this->_contractBind as $bind) {
            $this->app->bind($bind[0], $bind[1]);
        }
    }
}
