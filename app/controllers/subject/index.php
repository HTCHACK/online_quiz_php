<?php
require 'app/controllers/subject/subjectClass.php';

$mysqli = new Subject;

$mysqli->index($subjects);
