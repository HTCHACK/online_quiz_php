<?php
session_start();
?>
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
                            <h1>Quizs</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?php if (isset($_SESSION['deleted'])) : ?>
                        <div class="alert alert-warning" role="alert">
                            <?php
                            echo $_SESSION['deleted'];
                            unset($_SESSION['deleted']);
                            ?>
                        </div>
                    <?php elseif (isset($_SESSION['created'])) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['created'];
                            unset($_SESSION['created']);
                            ?>
                        </div>
                    <?php elseif (isset($_SESSION['updated'])) : ?>
                        <div class="alert alert-info" role="alert">
                            <?php
                            echo $_SESSION['updated'];
                            unset($_SESSION['updated']);
                            ?>
                        </div>
                    <?php endif ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <a href="/admin-quiz-create" class="btn btn-primary">Add Quiz</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th>Subject</th>
                                                <th>Correct Option</th>
                                                <th>Settings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($quizs->num_rows > 0) : ?>
                                                <?php while ($data = mysqli_fetch_array($quizs)) : ?>
                                                    <tr>
                                                        <td><?= ++$key; ?></td>
                                                        <td><?= $data["question"]; ?></td>
                                                        <td><?= $data["subject_id"]; ?></td>
                                                        <td><?= $data["correct_option"];?></td>
                                                        <td>
                                                            <a href="app/controllers/quiz/edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                            <a href="app/controllers/quiz/delete.php?del=<?php echo $data['id']; ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <tr>

                                                    <td colspan="4" style="text-align:center"><?php echo "No Data Available"; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php $conn->close(); ?>
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