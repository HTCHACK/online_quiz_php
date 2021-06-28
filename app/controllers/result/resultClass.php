<?php


class Result
{


    public function adminPage($results)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $results = $mysqli->query("SELECT * FROM users ORDER BY created_at DESC") or die($mysqli->error);

        require 'views/admin/result/index.view.php';
    }

    public function result_question()
    {


        $mysqli = mysqli_connect("127.0.0.1", "root", "", "myDB");
        $id = $_GET['id'];
        $query = $mysqli->query("SELECT * FROM users WHERE id='$id'");
        $sql = "SELECT * FROM quizs WHERE subject_id='$id'";
        $result = $mysqli->query($sql);



        //$quizs = $mysqli->query("SELECT * FROM quizs WHERE subject_id='$id'");
        //$query=mysqli_query($db,"select * from subjects where id='$id'");
        $row = mysqli_fetch_array($query);
    }
}
