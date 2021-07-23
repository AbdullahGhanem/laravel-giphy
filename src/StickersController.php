<?php

namespace Ghanem\Giphy;

use Ghanem\Giphy\Request;

class StickersController
{
    public function search($query, $limit = 25, $offset = 0, $rating = null, $lang = null){
        return Request::search('stickers', $query, $limit, $offset, $rating, $lang);
    }

    public function trending($limit = 25, $rating = null){
        return Request::trending('stickers', $limit, $rating);
    }

    public function translate($query, $rating = null, $lang = null){
        return Request::translate('stickers', $query, $rating, $lang);
    }
    
    public function random($query, $rating = null){
        return Request::random('stickers', $query, $rating);
    }
}