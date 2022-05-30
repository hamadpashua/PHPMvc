<?php
/**
 * @author Hamadpashua hamadpashua7@gmail.com
 * SaiLite team production
 * All right reserved under SaiLite team
 * 
 */

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

/**
 * Bootstraping the application start-up
 */
require_once __DIR__ . '/../bootstrap/app.php';


 ?>
