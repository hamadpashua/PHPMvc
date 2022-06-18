<?php
namespace App\Controllers;

use SaiLite\Application\Controller;

class PostsController extends Controller
{
    /**
     * PostsController class
     * return @param $controller
     * return @param $action
     */

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function index()
    {
        return view('posts.index');
    }


    public function create()
    {
        return view('posts.create');
    }
}

 ?>