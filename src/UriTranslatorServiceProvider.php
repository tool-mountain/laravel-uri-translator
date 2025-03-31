<?php

namespace ToolMountain\UriTranslator;

use ToolMountain\UriTranslator\Macros\Lang\UriMacro;
use Illuminate\Support\ServiceProvider;

class UriTranslatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UriMacro::register();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
