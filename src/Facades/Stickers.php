<?php

namespace Ghanem\Giphy\Facades;

use Illuminate\Support\Facades\Facade;

class Stickers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ghanem-stickers';
    }
}