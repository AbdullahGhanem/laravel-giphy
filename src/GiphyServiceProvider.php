<?php

namespace Ghanem\Giphy;

use Illuminate\Support\ServiceProvider;

class GiphyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/giphy.php', 'giphy');

        $this->app->bind('ghanem-giphy', function () {
            return new Giphy;
        });
    }
}
