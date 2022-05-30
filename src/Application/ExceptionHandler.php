<?php 
namespace SaiLite\Application;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

class ExceptionHandler
{
    /**
     * Handle th whhoops error
     *
     * @return void
     */

    public static function handler()
    {
        $whoops = new Run;
        $whoops->prependHandler(new PrettyPageHandler);
        $whoops->register();
    }
}
?>