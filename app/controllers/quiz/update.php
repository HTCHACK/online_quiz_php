<?php
session_start();
$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
$subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
$id = $_GET['id'];

$question = $_POST['question'];
$option_one = $_POST['option_one'];
$option_two = $_POST['option_two'];
$option_three = $_POST['option_three'];
$option_four = $_POST['option_four'];
$correct_option = $_POST['correct_option'];
$subject_id = $_POST['subject_id'];

$mysqli->query("UPDATE quizs SET 
question='$question',
option_one='$option_one',
option_two='$option_two',
option_three='$option_three',
option_four='$option_four',
correct_option='$correct_option',
subject_id='$subject_id' WHERE id='$id'") or die($mysqli->error);
$_SESSION['updated'] = "Quiz updated!";
header('location:/admin-quiz');
