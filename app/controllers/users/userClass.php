<?php


class Users
{
    public function result()
    {
        $subjects = $_REQUEST['subjects'];
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB');


        $correct_answer = 0;
        $all_answer = 0;

        foreach ($_REQUEST as $key => $opt) {
            if (is_numeric($key)) {
                $result = $mysqli->query("SELECT id, correct_option FROM quizs WHERE id=$key");
                while ($data = $result->fetch_assoc()) {
                    if ($data['correct_option'] == $opt) {
                        $correct_answer++;
                    }
                    $all_answer++;
                }
            }
        }

        $name = $_POST['name'];
        $subject_id = $_POST['subject_id'];
        $percentage = $correct_answer *100/ $all_answer;
        //die(var_dump($percentage));
        //$var = $mysqli->query("INSERT INTO users VALUES('$name','$subject_name','$percentage','$correct_answer')");
        $sql = "INSERT INTO users(name,percentage,subject_id) VALUES('$name','$percentage','$subject_id')";
        //$mysqli->close();
        //header('location: /admin-result');
        //die();
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully<br>";
            if($percentage >= 60){
                echo "Your Result : " . $percentage . "<br>";
                echo "You Pass The Test";
            }
            else{
                echo "Your Result : " . $percentage . "<br>";
                echo "You Failed";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

        $mysqli->close();
    }
}
