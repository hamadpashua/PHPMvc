<?php 
namespace SaiLite\Http;

class Redirect
{

    /**
     * Redirecting function for pages
     *
     * @param [type] $path
     * @return void
     */
    public static function redirect($path)
    {
        return header('location:' . $path);
        exit();
    }

    /**
     * Redirecting back function
     *
     * @return void
     */
    
    public static function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        return header('location:' . $uri);
    }

    public static function previous() {
        return Server::get('HTTP_REFERER');
    }
}


?>