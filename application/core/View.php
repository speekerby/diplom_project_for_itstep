<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 27.05.2018
 * Time: 10:10
 */

namespace application\core;


class View
{
    public $patch;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->patch = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        ob_start();
        require 'application/views/' . $this->patch . '.php';
        $content = ob_get_clean();
        require 'application/views/layouts/' . $this->layout . '.php';
    }
}