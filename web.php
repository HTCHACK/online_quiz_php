<?php



$router->define([

    //User 
    ''=>'app/controllers/index.php',
    'subject'=>'app/controllers/subject/userpage.php',


    //Admin 
    'login'=>'app/controllers/auth/login.php',
    'admin'=>'app/controllers/admin/index.php',
    'admin-subject'=>'app/controllers/subject/index.php',
    'admin-subject-create'=>'views/admin/subject/create.view.php',
    //'admin-subject-edit'=>'views/admin/subject/edit.view.php',


    //subject
    'store'=>'app/controllers/subject/store.php',
    //'delete'=>'app/controllers/subject/delete.php',
    //'edit'=>'app/controllers/subject/edit.php',

    //Quiz

    'admin-quiz'=>'app/controllers/quiz/index.php',
    'admin-quiz-create'=>'views/admin/quiz/create.view.php',

    'store-quiz'=>'app/controllers/quiz/store.php',

    'admin-result'=>'app/controllers/result/index.php',
    'result'=>'app/controllers/result/index.php',
    'users'=>'app/controllers/users/index.php',
    'resultview'=>'app/controllers/result/result.php',
]);






































































