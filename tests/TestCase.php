<?php

namespace Smartosc\LaraBig\Test;

use Smartosc\LaraBig\LaraBigProvider;
use Smartosc\LaraBig\Model\Store;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadLaravelMigrations();
        $this->artisan('migrate')->run();

//        factory(Store::class)->create([
//            'store_hash' => 'abc',
//            'access_token' => '123'
//        ]);
    }

    protected function getPackageProviders($app)
    {
        return [LaraBigProvider::class];
    }

    protected function getEnvironmentSetUp($app) : void
    {

        // Use memory SQLite, cleans it self up
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        $app['config']->set('larabig.secret_key', '3f34efed83e3aecf3ef94da64d3bc190b8bd96dc3208a61df43624baa6916e57');
    }
}
