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
                            <h1>Test Results</h1>
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
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Result</th>
                                                <th>Subject ID</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($results->num_rows > 0) : ?>
                                                <?php while ($data = mysqli_fetch_array($results)) : ?>
                                                    <tr
                                                    <?php if($data["percentage"] >= 86):?>
                                                    style="background:#3dcfd3;font-weight:bold" 
                                                    <?php elseif($data["percentage"] >= 60):?>
                                                    style="background:rgb(28, 173, 28);font-weight:bold"
                                                    <?php else:?>
                                                    style="background:rgb(202, 52, 41);font-weight:bold"
                                                    <?php endif;?>
                                                    >
                                                        <td><?= ++$key; ?></td>
                                                        <td><?= $data["name"]; ?></td>
                                                        <td><?= $data["percentage"]; ?>%</td>
                                                        <td><?= $data["subject_id"];?></td>
                                                        <td><?= $data["created_at"]; ?></td>
                                                        
                                                    </tr>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <tr>

                                                    <td colspan="4" style="text-align:center"><?php echo "No Data Available"; ?></td>
                                                </tr>
                                            <?php endif; ?>

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