<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 27.05.2018
 * Time: 10:04
 */

namespace application\controllers;


use application\core\controller;

class MainController extends controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
//        echo "Главная страница ";
//        var_dump($this->route);
    }
}