<!doctype html>
<html lang="rn">

<head>
    <?php require 'views/admin/layouts/head.view.php'; ?>
</head>

<body class="hold-transition login-page">


<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Online</b>Quiz</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login Adminstation</p>

            <form action="validate.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="adminname" placeholder="Phone Number">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>


</body>



<?php require 'views/admin/layouts/scripts.view.php'; ?>
</body>

</html>