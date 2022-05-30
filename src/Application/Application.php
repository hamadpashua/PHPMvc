<?php 
namespace SaiLite\Application;

use SaiLite\Http\Request;
use SaiLite\Session\Session;
use SaiLite\Database\DBConnection;

class Application
{
    /**
     * Return Applications handlers
     *
     * @return void
     */
    public static function run()
    {
        ExceptionHandler::handler();
        Environment::handler();
        Session::start();
        Request::handler();
        new DBConnection();
    }
}
?>