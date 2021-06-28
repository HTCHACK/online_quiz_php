<?php


class Subject
{

    public function index($subjects)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
        require 'views/admin/subject/index.view.php';
    }

    public function store()
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));

        if (isset($_POST['save'])) {
            $subject_name = $_POST['subject_name'];

            $mysqli->query("INSERT INTO subjects(subject_name) VALUES('$subject_name')") or die($mysqli->error);
            $_SESSION['created'] = "Subject created!";
            header('location: /admin-subject');
        }
    }

    public function edit()
    {
        
    }
    public function update()
    {
    }

    public function delete()
    {
    }

    public function UserPage($subjects)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
        require 'views/subject/index.view.php';
    }
}
