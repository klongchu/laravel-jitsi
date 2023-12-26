<?php

namespace Klongchu\LaravelJitsi\Tests;

use Klongchu\LaravelJitsi\LaravelJitsiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->withFactories(__DIR__ . '/factories');

        // Add routes by calling macro
        $this->app['router']->jitsi();
        // Refresh named routes
        $this->app['router']->getRoutes()->refreshNameLookups();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelJitsiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app['config']->set('laravel-jitsi.domain', 'meet.jit.si');
        $app['config']->set('laravel-jitsi.id', 'app-id');
        $app['config']->set('laravel-jitsi.secret', 'my-secret-key');
    }
}
