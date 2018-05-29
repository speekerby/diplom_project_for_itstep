<?php
/**
 * Created by PhpStorm.
 * User: speek
 * Date: 29.05.2018
 * Time: 12:42
 */

namespace application\core;


use application\lib\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }
}