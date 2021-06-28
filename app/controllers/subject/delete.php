<?php
session_start();

$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $mysqli->query("DELETE from subjects where id='$id'") or die("error");
    $_SESSION['deleted'] = "Subject deleted!";
    header('location: /admin-subject');
}
