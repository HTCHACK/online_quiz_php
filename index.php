<?php

require 'routes/bootstrap.php';

$router = new Router;

require Router::load('web.php')
        ->direct(Request::uri());
             


        