<?php

use SaiLite\Route\Router;
use SaiLite\Application\Application;

/**
 * Requiring configurations files
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

/**
 * Booting the application to run
 */

Application::run();
Router::route($url);


 ?>
