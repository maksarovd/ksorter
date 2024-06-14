<?php

namespace Maksarovd\Ksorter\Providers;

use Illuminate\Support\ServiceProvider;
use Maksarovd\Ksorter\DataSource\Ksorter\Ksorter;


class KsorterServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadRoutesFrom(
            __DIR__.'/../../routes/web.php'
        );
        $this->loadMigrationsFrom(
            __DIR__.'/../../database/migrations'
        );
        $this->loadTranslationsFrom(
            __DIR__.'/../../lang', 'ksorter'
        );
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'ksorter'
        );

        $this->publishes([
            __DIR__.'/../../config/ksorter.php' => config_path('ksorter.php'),
            __DIR__.'/../../resources/views' => resource_path('views/ksorter'),
            __DIR__.'/../../lang' => $this->app->langPath('lang'),
        ]);
    }

    public function register(): void
    {
        $this->app->singleton('ksorter', function(){
            return new Ksorter();
        });
    }
}
