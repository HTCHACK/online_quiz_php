<?php

class AdminLogin 
{
    public function index($adminlogin)
    {

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $adminlogin = $mysqli->query("SELECT * FROM adminlogin ") or die($mysqli->error);
        require 'views/admin/home/index.view.php';

    }
}