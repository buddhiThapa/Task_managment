<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\InterfaceTest;
use App\Services\InterfaceService;
class ServiceProviderTest extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InterfaceTest::class,InterfaceService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
