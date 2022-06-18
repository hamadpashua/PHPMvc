<?php
namespace App\Controllers;

use SaiLite\Application\Controller;

class AuthController extends Controller
{
    /**
     * AuthController class
     * return @param $controller
     * return @param $action
     */

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function changePassword()
    {
        return view('auth.changePassword');
    }

    public function accountSetting()
    {
        return view('auth.accountSetting');
    }


}

 ?>