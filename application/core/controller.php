<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 26.05.2018
 * Time: 15:29
 */

namespace application\core;

use application\core\View;

abstract class controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view= new View($route);
    }
}