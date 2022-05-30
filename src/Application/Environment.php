<?php 
namespace SaiLite\Application;

use Dotenv\Dotenv;

class Environment
{
    /**
     * Handle th environment runtime
     *
     * @return void
     */

    public static function handler()
    {
        $dotenv = Dotenv::createImmutable(BASE_PATH);
        $dotenv->load();
    }
}
?>