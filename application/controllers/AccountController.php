<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 26.05.2018
 * Time: 15:09
 */

namespace application\controllers;

use application\core\controller;

class AccountController extends controller
{
    public function loginAction()
    {
//        $this->view->redirect('/');
        $this->view->render('Страница Входа');
    }

    public function registerAction()
    {
        $this->view->render('Регистрация');
    }

}