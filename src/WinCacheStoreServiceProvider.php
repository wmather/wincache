<?php

namespace Wmather\WinCache;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class WinCacheStoreServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::extend('wincache', function ($app) {
            return Cache::repository(new WinCacheStore);
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}