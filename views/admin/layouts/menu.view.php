<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="/login" class="nav-link">Logout</a>
        </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php
        function active($currect_page)
        {
            $url_array =  explode('/', $_SERVER['REQUEST_URI']);
            $url = end($url_array);
            if ($currect_page == $url) {
                echo 'active'; //class name in css 
            }
        }
        ?>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin" class="nav-link <?php active('admin');?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-subject" class="nav-link <?php active('admin-subject',);?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Subjects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-subject-create" class="nav-link <?php active('admin-subject-create',);?>">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Subject
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-quiz" class="nav-link <?php active('admin-quiz');?>">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            Quiz
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-quiz-create" class="nav-link <?php active('admin-quiz-create');?>">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Add Quiz
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-result" class="nav-link <?php active('admin-result');?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Results
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>