<?php 
namespace SaiLite\Application;

use SaiLite\Session\Session;

class CSRFToken
{
    public static function csrfToken()
    {
        if (!Session::has('token')) {
           $value = base64_encode(openssl_random_pseudo_bytes(32));
           Session::set('token', $value); 
        }
        return Session::get('token');
    }

    public static function verifyToken($token)
    {
        if (Session::has('token') && Session::get('token') === $token) {
            Session::remove('token');
            return true;
        }
        return false;
    }
}
?>