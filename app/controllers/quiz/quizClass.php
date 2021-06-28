<?php


class Quiz
{

    public function index($quizs)
    {   
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $quizs = $mysqli->query("SELECT * FROM quizs ORDER BY id DESC");
        require 'views/admin/quiz/index.view.php';
    }

    public function store()
    {

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));

        if (isset($_POST['save'])) {
            $question = $_POST['question'];
            $option_one = $_POST['option_one'];
            $option_two = $_POST['option_two'];
            $option_three = $_POST['option_three'];
            $option_four = $_POST['option_four'];
            $correct_option = $_POST['correct_option'];
            $subject_id = $_POST['subject_id'];

            $mysqli->query("INSERT INTO quizs(question,option_one,option_two,option_three,option_four,correct_option,subject_id) VALUES('$question','$option_one','$option_two','$option_three','$option_four','$correct_option','$subject_id')") or die($mysqli->error);
            
            $_SESSION['created'] = "Quiz created!";
            header('location: /admin-quiz');
        }
    }

    public function result()
    {

    }
}
