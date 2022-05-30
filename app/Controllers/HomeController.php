<?php
namespace App\Controllers;

use SaiLite\Application\Controller;

class HomeController extends Controller
{
    /**
     * HomeController class
     * return @param $controller
     * return @param $action
     */

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function index()
    {
        return view('home.index');
    }
}

 ?>
