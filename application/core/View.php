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
    public $layout = 'default'; //Основной HTML

    public function __construct($route)
    {
        $this->route = $route;
        $this->patch = $route['controller'] . '/' . $route['action'];
    }

    //Функция вывода View
    public function render($title, $vars = [])
    {
        extract($vars);
        $path = 'application/views/' . $this->patch . '.php';;
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        }
    }

    //Функция редиректа
    public function redirect($url)
    {
        header('location: ' . $url);
        exit();
    }

    //Функия ошибок 404, 403
    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require $path;
        }
        exit();
    }


}