<?php
namespace SaiLite\Route;

class Router
{
    /**
     * Routing class for framework
     * return @void
     */

    public static function route($url)
    {
        // class controller
        $controller = (isset($url[0]) && $url != '') ? ucwords($url[0]) : 'HomeController';
        $contrtoller_name = $controller;
        array_shift($url);

        // action or method of controller
        $action = (isset($url[0]) && $url != '') ? $url[0]: 'index';
        $action_name = $controller;
        array_shift($url);

        $queryParams = $url;
        $controller = "App\Controllers\\" . $controller;
        $dispatcher = new $controller($contrtoller_name, $action);

        if (method_exists($controller, $action)) {
            call_user_func_array([$dispatcher, $action], $queryParams);
        }else{
            die('method '. " <b> '$action' </b> ". ' doesnt exists in ' . '<b>' .$contrtoller_name. '<b>');
        }
    }
}


 ?>
