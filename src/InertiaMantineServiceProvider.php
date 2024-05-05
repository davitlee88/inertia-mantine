<?php

namespace DavitLee88\InertiaMantine;

use Illuminate\Support\ServiceProvider;

class InertiaMantineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/js' => resource_path('js'),
            __DIR__ . '/../postcss.config.cjs' => base_path('postcss.config.cjs'),
            __DIR__ . '/../resources/css' => resource_path('css'),
        ], 'inertia-mantine');
    }
}
