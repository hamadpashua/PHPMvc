<?php 
namespace SaiLite\Http;

class Request
{
    private static $script_name;
    private static $base_url;
    private static $url;
    private static $full_url;
    private static $query_string;


    /**
     * Handler the request
     *
     * @return void
     */
    public static function handler() {
        static::$script_name = str_replace('\\', '', dirname(Server::get('SCRIPT_NAME')));
        static::setBaseUrl();
        static::setUrl();
    }

    private static function setBaseUrl() {

        static::$base_url = $_ENV['APP_URL'] ;
    }

    private static function setUrl() {
        $request_uri = urldecode(Server::get('REQUEST_URI'));
        $request_uri = rtrim(preg_replace("#^" . static::$script_name. '#', '', $request_uri), '/');

        $query_string = '';

        static::$full_url = $request_uri;
        if (strpos($request_uri, '?') !== false) {
            list($request_uri, $query_string) = explode('?', $request_uri);
        }

        static::$url = $request_uri?:'/';
        static::$query_string = $query_string;
    }

    public static function baseUrl() {
        return static::setUrl();
    }

    public static function url() {
        return static::$url;
    }

    public static function method() {
        return Server::get('REQUEST_METHOD');
    }

    // public static function has($key)
    // {
    //     return (array_key_exists($key, self::all(true))) ? true : false;
    // }

    public static function value($key, array $type = null) {
        $type = isset($type) ? $type : $_REQUEST;
        return static::has($type, $key) ? $type[$key] : null;
    }

    // public static function get($key) {
    //     return static::value($key, $_GET);
    // }

    // public static function get($key)
    // {
    //     $obj = new static;
    //     $data = $obj->all();
    //     return $data->$key;
    // }

    public static function post($key) {
        return static::value($key, $_POST);
    }

    public static function set($key, $value) {
        $_REQUEST[$key] = $value;
        $_POST[$key] = $value;
        $_GET[$key] = $value;

        return $value;
    }

    public static function previous() {
        return Server::get('HTTP_REFERER');
    }

    public static function all_m() {
    return $_REQUEST;
    }

    public static function all($is_array = false)
    {
        $result = [];
        if (count($_GET)  > 0) $result['get'] = $_GET;
        if (count($_POST)  > 0) $result['post'] = $_POST;
        $result['file'] = $_FILES;
        return json_decode(json_encode($result), $is_array);
    }

    public static function get($key)
    {
        $obj = new static;
        $data = $obj->all();
        return $data->$key;
    }

    public static function has($key)
    {
        return (array_key_exists($key, self::all(true))) ? true : false;
    }

    public static function old($key, $value)
    {
        $obj = new static;
        $data = $obj->all();
        return isset($data->$key->$value) ? $data->$key->$value : '';
    }

    public static function refresh()
    {
        $_POST = [];
        $_GET = [];
        $_FILES = [];
    }
}
?>