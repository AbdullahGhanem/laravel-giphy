<?php

namespace Ghanem\Giphy;

use Illuminate\Support\Facades\Facade;

class GiphyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ghanem-giphy';
    }
}
