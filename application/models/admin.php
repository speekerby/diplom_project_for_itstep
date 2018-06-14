<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 29.05.2018
 * Time: 12:37
 */

namespace application\models;

use application\core\Model;

class admin extends Model
{
    public $error;

    //Валидация формы обратной связи
    public function loginValidate($post)
    {
        $config = require 'application/config/admin.php';

        if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
            $this->error = 'Логин или пароль указан не верно';
            return false;
        }
        return true;
    }

    public function postValidate($post, $type)
    {
        $nameLen = iconv_strlen($post['name']);
        $descriptionLen = iconv_strlen($post['description']);
        $textLen = iconv_strlen($post['text']);

        if ($nameLen < 3 or $nameLen > 100) {
            $this->error = 'Имя должно содержать от 3 до 100 символов';
            return false;
        } elseif ($descriptionLen < 3 or $descriptionLen > 100) {
            $this->error = 'Описание должно содержать от 3 до 100 символов';
            return false;
        } elseif ($textLen < 10 or $textLen > 5000) {
            $this->error = 'Текст должно содержать от 10 до 5000 символов';
            return false;
        }


        if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
            $this->error = 'Изображение не выбрано';
            return false;
        }

        return true;
    }
}