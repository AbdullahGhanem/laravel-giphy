<?php

namespace Ghanem\Giphy;

use Illuminate\Support\ServiceProvider;

class GiphyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/giphy.php', 'giphy');

        $this->app->bind('ghanem-giphy', function () {
            return new Giphy;
        });
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/giphy.php' => config_path('giphy.php'),
        ], 'config');
    }
}
