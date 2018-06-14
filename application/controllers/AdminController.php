<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 08.06.2018
 * Time: 14:43
 */

namespace application\controllers;


use application\core\controller;

class AdminController extends controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction()
    {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
        }
        $this->view->render('Вход');
    }

    public function logoutAction()
    {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'ok');

        }
        $this->view->render('Добавить пост');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'ok');
        }
        $this->view->render('Редактировать пост');
    }

    public function postsAction()
    {
        $this->view->render('Посты');
    }

    public function deleteAction()
    {
//        $this->view->render('Удалить пост');
        exit('Удаление');
    }

}