<?php 
session_start();

require 'app/controllers/subject/subjectClass.php';

$mysqli = new Subject;

$mysqli->store();



