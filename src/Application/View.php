<?php 
namespace SaiLite\Application;

use Jenssegers\Blade\Blade;
use SaiLite\Session\Session;

class View
{
    /**
     * View Class for render tempalte
     *
     * @param [type] $path
     * @param array $data
     * @return void
     */
    public static function render($path, $data = []) {
        $errors = Session::flash('errors');
        $old = Session::flash('old');
        $data = array_merge($data, ['errors' => $errors, 'old' => $old]);
        return static::bladeRender($path, $data);
    }

    public static function bladeRender($path, $data = []) {
        $blade = new Blade(BASE_PATH . '/resources/views', BASE_PATH . '/storage/cache');
        echo $blade->make($path, $data)->render();
    }
}

?>