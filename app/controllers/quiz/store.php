<?php
session_start();

require 'app/controllers/quiz/quizClass.php';

$quiz = new Quiz;

$quiz->store();
