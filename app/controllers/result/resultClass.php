<?php


class Result
{   
    

    public function adminPage($results)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $results =$mysqli->query("SELECT * FROM results ") or die($mysqli->error);

        require 'views/admin/result/index.view.php';
    }

    public function result_question()
    {

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
        $id = $_GET['id'];
        $mysqli->query("SELECT * FROM subjects WHERE id='$id'") or die($mysqli->error);
        $quizs = $mysqli->query("SELECT * FROM quizs WHERE subject_id='$id'") or die($mysqli->error);
        $mysqli->query("SELECT * FROM results ") or die($mysqli->error);

        $question = $_POST['question'];
        $option_one = $_POST['option_one'];
        $option_two = $_POST['option_two'];
        $option_three = $_POST['option_three'];
        $option_four = $_POST['option_four'];

        $totalCorrect = 0;

        if ($quizs->num_rows > 0){
            while ($data = mysqli_fetch_array($quizs)){
                if($data['correct_option']==$option_one)
                {
                    $totalCorrect++;
                }
            } 
        }
        echo "<div id='results'>$totalCorrect</div>";
        
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $totalCorrect = $_POST['result'];
            $quiz_id = $_POST['quiz_id'];

            $mysqli->query("INSERT INTO results(name,result,quiz_id) VALUES('$name','$totalCorrect','$quiz_id')") or die($mysqli->error);
        }
    }
}
