<?php 
namespace SaiLite\Http;

class Url
{
    /**
     * Get path for the Url
     *
     * @param string $path
     * @return string $path
     */
    
    public static function path($path) {
        return Request::baseUrl() . '/' . trim($path, '/');
    }

    public static function previous() {
        return Server::get('HTTP_REFERER');
    }

}
?>