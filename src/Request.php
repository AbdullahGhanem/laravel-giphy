<?php

namespace Ghanem\Giphy;

class Request
{
    static public function request($endpoint, array $params = [])
    {
        $params['api_key'] = config('giphy.key');
        $result = file_get_contents('http://api.giphy.com/' . $endpoint . "?" . http_build_query($params));
        return json_decode($result);
    }

    static public function v3($endpoint, array $params = [])
    {
        $params['api_key'] = config('giphy.key');
        $result = file_get_contents('https: //giphy.com/api/v3/' . $endpoint . "?" . http_build_query($params));
        return json_decode($result);
    }

    static public function search($type, $query, $limit, $offset, $rating, $lang)
    {
        $endpoint = 'v1/' . $type . '/search';
        $params = [
            'q' => urlencode($query),
            'limit' => (int)$limit,
            'offset' => (int)$offset
        ];
        isset($rating) ? $params['rating'] = urlencode($rating) : null;
        isset($lang) ? $params['lang'] = urlencode($lang) : null;
        return Request::request($endpoint, $params);
    }

    static public function trending($type, $limit, $rating)
    {
        $endpoint = 'v1/' . $type . '/trending';
        $params = [
            'limit' => (int)$limit
        ];
        isset($rating) ? $params['rating'] = urlencode($rating) : null;
        return Request::request($endpoint, $params);
    }

    static public function translate($type, $query, $rating, $lang)
    {
        $endpoint = 'v1/' . $type . '/translate';
        $params = [
            's' => urlencode($query)
        ];
        isset($rating) ? $params['rating'] = urlencode($rating) : null;
        isset($lang) ? $params['lang'] = urlencode($lang) : null;
        return Request::request($endpoint, $params);
    }

    static public function random($type, $query, $rating)
    {
        $endpoint = 'v1/' . $type . '/random';
        $params = [
            'tag' => urlencode($query)
        ];
        isset($rating) ? $params['rating'] = urlencode($rating) : null;
        return Request::request($endpoint, $params);
    }

    static public function getByID($type, $id)
    {
        $endpoint = 'v1/' . $type . '/' . $id;
        return Request::request($endpoint);
    }

    static public function getByIDs($type, $ids)
    {
        $endpoint = 'v1/' . $type;
        $params = [
            'ids' => implode(',', $ids)
        ];
        return Request::request($endpoint, $params);
    }

    static public function getUserFeeds($user_id)
    {
        $endpoint = 'channels/' . $user_id . '/' . 'gifs';
        return Request::v3($endpoint);
    }
}
