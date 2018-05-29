<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 27.05.2018
 * Time: 10:04
 */

namespace application\controllers;


use application\core\controller;
use application\lib\Db;

class MainController extends controller
{
    public function indexAction()
    {
        $result = $this->model->getNews();

        $vars = [
            'news' => $result
        ];

        $this->view->render('Главная страница', $vars);
    }
}