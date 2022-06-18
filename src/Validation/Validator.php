<?php 
namespace SaiLite\Validation;

use SaiLite\Http\Url;
use SaiLite\Http\Redirect;
use SaiLite\Session\Session;
use Rakit\Validation\Validator as ValidationValidator;
use SaiLite\Http\Request;

class Validator
{
    /**
     * validate function requests
     *
     * @param array $rules
     * @param [type] $json
     * @return void
     */

    public static function validate(array $rules, $json)
    {
        $validator = new ValidationValidator();
        $validation =  $validator->validate($_POST + $_FILES , $rules);
        $errors = $validation->errors();
        if ($validation->fails()) {
            if ($json) {
                return ['errors' => $errors->firstOfAll()];
            }else{
                Session::set('errors', $errors);
                Session::set('old',  Request::all_m());
                return Redirect::redirect(Url::previous());
            }
        } 
    }
}
?>