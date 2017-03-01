<?php

/**
 * Created by PhpStorm.
 * User: Moe-tan
 * Date: 1/10/2017
 * Time: 10:45 AM
 */
class database
{
    protected $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '123@123a', 'php_mvc');
        if(!$this->conn){
            die('Can not connect to database ...!');
        }
    }
}

