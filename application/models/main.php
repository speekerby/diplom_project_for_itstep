<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 29.05.2018
 * Time: 12:37
 */

namespace application\models;

use application\core\Model;

class main extends Model
{
    public $error;

    //Валидация формы обратной связи
    public function contactValidate($post)
    {
        $nameLen = iconv_strlen($post['name']);
        $textLen = iconv_strlen($post['text']);

        if ($nameLen < 3 or $nameLen > 20) {
            $this->error = 'Имя должно содержать от 3 до 20 символов';
            return false;
        } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'E-mail указан не верно';
            return false;
        } elseif ($textLen < 10 or $textLen > 500) {
            $this->error = 'Сообщение должно содержать от 10 до 500 символов';
            return false;
        }
        return true;
    }
}