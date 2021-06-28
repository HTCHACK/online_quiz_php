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
                            <h1>Create Quiz</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <?php
                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
                                $subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
                                ?>
                                <!-- /.card-header -->
                                <form method="post" action="/store-quiz">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Select Subject</label>
                                            <select class="form-control" name="subject_id">
                                                <option value="">Select Subject</option>
                                                <?php while ($data = mysqli_fetch_array($subjects)) : ?>
                                                    <option value="<?= $data['id'] ?>"><?php echo $data['subject_name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" class="form-control" name="question" placeholder="Question.." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Option 1</label>
                                            <input type="text" class="form-control" name="option_one" placeholder="Option 1.." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Option 2</label>
                                            <input type="text" class="form-control" name="option_two" placeholder="Option 2.." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Option 3</label>
                                            <input type="text" class="form-control" name="option_three" placeholder="Option 3.." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Option 4</label>
                                            <input type="text" class="form-control" name="option_four" placeholder="Option 4.." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Correct Option</label>
                                            <input type="text" class="form-control" name="correct_option" placeholder="Correct Option " required>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-info" name="save"><i class="fas fa-plus"></i>
                                                Add</button>
                                            <a href="/admin-quiz" class="btn btn-default"><i class="fas fa-times"></i>
                                                Cancel</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
        </div>

    </div>

</body>



<?php require 'views/admin/layouts/scripts.view.php'; ?>
</body>

</html>