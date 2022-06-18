<?php

use SaiLite\Route\Router;
use SaiLite\Application\Application;

/**
 * Requiring configurations files
 * then autoload all required classes
 * uasing composer
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

/**
 * Booting the application to run
 * then route the system
 */

Application::run();
Router::route($url);


 ?>
