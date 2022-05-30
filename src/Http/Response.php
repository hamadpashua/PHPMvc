<?php 
namespace SaiLite\Http;

class Response
{
    /**
     * Return json data for JS manupulations
     *
     * @param [type] $data
     * @return void
     */
    
    public static function json($data) {
        return json_encode($data);
    }

    public static function response($data) {
        if (! $data) {return ;}
        if (! is_string($data)) {
            $data = static::json($data);
        }
        echo $data;
    }
}
?>