<?php
session_start();
$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
$id = $_GET['id'];

$subject_name = $_POST['subject_name'];
$mysqli->query("UPDATE subjects SET subject_name='$subject_name' WHERE id='$id'") or die($mysqli->error);
$_SESSION['updated'] = "Subject updated!";
header('location:/admin-subject');
