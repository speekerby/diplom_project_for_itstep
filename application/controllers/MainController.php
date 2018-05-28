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
        $db = new Db();

        $params = [
            'id' => 5,
        ];
        $data = $db->column('SELECT user FROM users WHERE id=:id', $params);
        debug($data);
        $this->view->render('Главная страница');
    }
}