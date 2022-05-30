<?php 
namespace SaiLite\Http\Middleware;

use SaiLite\Session\Session;

class Middleware
{
    public static function middleware($role)
    {
        $msg = '';
        switch ($role) {
            case 'police':
                $msg = "Your not authorized to this page";
                break;
            case 'user':
                $msg = "Your not authenticated to this page. Please login first";
                break;
        }
        if (isAuthenticated()) {
            if (user()->role != $role) {
                Session::set('auth', $msg);
                return false;
            }
        } else {
            Session::set('auth', $msg);
            return false;
        }
        return true;
    }
}

?>
