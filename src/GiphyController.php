<?php

namespace Ghanem\Giphy;

use Ghanem\Giphy\Request;

class GiphyController
{
    public function search($query, $limit = 25, $offset = 0, $rating = null, $lang = null)
    {
        return Request::search('gifs', $query, $limit, $offset, $rating, $lang);
    }

    public function trending($limit = 25, $rating = null)
    {
        return Request::trending('gifs', $limit, $rating);
    }

    public function translate($query, $rating = null, $lang = null)
    {
        return Request::translate('gifs', $query, $rating, $lang);
    }

    public function random($query, $rating = null)
    {
        return Request::random('gifs', $query, $rating);
    }

    public function getByID($id)
    {
        return Request::getByID('gifs', $id);
    }

    public function getByIDs(array $ids)
    {
        return Request::getByIDs('gifs', $ids);
    }

    public function getUserFeeds($user_id, $page = null)
    {
        return Request::getUserFeeds($user_id, $page);
    }
}
