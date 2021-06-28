<!doctype html>
<html lang="rn">

<head>
    <?php require 'views/admin/layouts/head.view.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">


    <div class="wrapper">

        <?php require 'views/admin/layouts/menu.view.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Admin</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Login And Password</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Settings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php foreach ($adminlogin as $key => $data): ?>
                                            <tr>
                                                <td><?= $data['adminname']; ?></td>
                                                <td><?= $data['password'];?></td>

                                                <td class="text-right">
                                                    <a href="#" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                    <a href="#" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                            </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>

    </div>

</body>



<?php require 'views/admin/layouts/scripts.view.php'; ?>
</body>

</html>