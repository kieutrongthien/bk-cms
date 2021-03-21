<?php

declare(strict_types=1);

namespace User\Providers;

use SebastiaanLuca\Module\Providers\ModuleProvider;

class UserServiceProvider extends ModuleProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() : void
    {
        parent::register();
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() : void
    {
        parent::boot();
    }
}
