<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 29.05.2018
 * Time: 12:37
 */

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getNews()
    {
        $result = $this->db->row('SELECT title, description FROM news ');
        return $result;
    }
}