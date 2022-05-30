<?php
namespace SaiLite\Application;

abstract class Controller
{

    /**
     * Base class controller
     * return @param $controller
     * return @param $action
     */

    protected $controller, $action;

    public function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
    }
}

 ?>
