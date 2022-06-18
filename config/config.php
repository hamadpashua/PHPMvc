<?php

/**
 * defining system constants
 */

define('BASE_PATH', realpath(__DIR__. '/..'));
define('ROOT', realpath(__DIR__. '/..'));
define('DS', DIRECTORY_SEPARATOR);

/**
 * autoloading class from app
 * using php recommended standard (psr-4)
 * with namespaces.
 */

spl_autoload_register(function ($class) {
    $path = BASE_PATH . str_replace('\\', '/', DS .$class) . '.php';
    if (file_exists($path)) {
    require_once $path;
    }
});

// spl_autoload_register(function ($class) {
//     $classArray = explode('\\', $class);
//     $className = array_pop($classArray);
//     $subPath = strtolower(implode(DS, $classArray));
//     $path = BASE_PATH . DS . $subPath . DS . $className . '.php';
//     if (file_exists($path)) {
//         require $path;
//     }
// });

?>
