<?php

namespace Ghanem\Giphy\Facades;

use Illuminate\Support\Facades\Facade;

class Giphy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ghanem-giphy';
    }
}