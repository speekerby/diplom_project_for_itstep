<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 27.05.2018
 * Time: 10:04
 */

namespace application\controllers;


use application\core\controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }

    public function aboutAction()
    {
        $this->view->render('О нас');
    }

    public function contactAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('Error', $this->model->error);
            }
            //Отправка сообщение на E-mail
            mail('vaca@loketa.com', 'Сообщение формы обратной свзяи ITCOMPANY', ',' . $_POST['name'] . ',' . $_POST['email'] . ',' . $_POST['text']);
            $this->view->message('', 'Сообщение отправлено ');
        }
        $this->view->render('Контакты');
    }

    public function blogAction()
    {
        $pagination = new Pagination($this->route, $this->model->postsCount(), 6);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->postsList($this->route)
        ];
        $this->view->render('Блог', $vars);
    }

    public function postAction()
    {
        $adminModel = new Admin;
        if (!$adminModel->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->postData($this->route['id'])[0],
        ];

        $this->view->render('Пост', $vars);
    }

}