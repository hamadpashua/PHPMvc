<?php
namespace App\Controllers;

use SaiLite\Http\Request;
use SaiLite\Validation\Validator;
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

    public function create()
    {
        $Request = Request::get('post');

        Validator::validate([
            'test' => 'required',
            'file' => 'required|uploaded_file:0,500K,png,jpeg',
        ],false);

        
    }


    public function about()
    {
        return view('home.about');
    }
}

 ?>
