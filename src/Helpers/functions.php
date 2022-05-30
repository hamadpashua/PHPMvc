<?php 

use App\Models\User;
use SaiLite\Http\Url;
use SaiLite\Http\Request;
use SaiLite\Http\Redirect;
use SaiLite\Http\Response;
use SaiLite\Session\Session;
use SaiLite\Application\View;
use SaiLite\Application\CSRFToken;


/**
 * Helpers functions to minimize codes on the app
 *
 */
if (! function_exists('view')) {
    function view($path, $data = []) {
        echo View::render($path, $data);
    }
}

if (!function_exists('make')) {
    function make($template, $args = [])
    {
        extract($args);
        ob_start();
        include BASE_PATH . '/resources/views/emails/' . $template . ".php";
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}

if (! function_exists('request')) {
    function request($key) {
        echo Request::value($key);
    }
}

if (! function_exists('redirect')) {
    function redirect($path) {
        return Redirect::redirect($path);
    }
}


if (! function_exists('previous')) {
    function previous() {
        echo Url::previous();
    }
}

if (! function_exists('url')) {
    function url($path) {
        echo Url::path($path);
    }
}

if (! function_exists('asset')) {
    function asset($path) {
        echo Url::path($path);
    }
}

if (! function_exists('dd')) {
    function dd($data) {
        echo "<pre>";
        if (is_string($data)) {
            echo $data;
        } else {
            print_r($data);
        }
        echo "</pre>";
        die();
    }
}

if (! function_exists('session')) {
    function session($key) {
        return Session::get($key);
    }
}

if (!function_exists('has')) {
    function has($value)
    {
        return Session::has($value);
    }
}

if (! function_exists('flash')) {
    function flash($key) {
        return Session::flash($key);
    }
}

if (! function_exists('response')) {
    function response($key) {
        echo Response::response($key);
    }
}

if (!function_exists('verify_token')) {
    function verify_token($token)
    {
        return CSRFToken::verifyToken($token);
    }
}

if (!function_exists('csrf')) {
    function csrf()
    {
        return CSRFToken::csrfToken();
    }
}

if (!function_exists('isAuthenticated')) {
    function isAuthenticated()
    {
        return Session::has('SESSION_USER') ? true : false;
    }
}

if (!function_exists('user')) {
    function user()
    {
        if (isAuthenticated()) {
            return User::findOrFail(Session::get('SESSION_UID'));
        }
        return false;
    }
}

?>