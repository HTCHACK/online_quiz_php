<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
$id = $_GET['id'];

$query = $mysqli->query("SELECT * FROM quizs WHERE id='$id'") or die($mysqli->error);
//$query=mysqli_query($db,"select * from subjects where id='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="background:#efefef">
    <div class="container" style="padding-top:5rem;padding-bottom:2rem">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 style="text-align:center;font-size:25px;font-weight:600;padding-bottom:1.5rem">Update Quiz</h2>
                <form method="POST" action="/app/controllers/quiz/update.php?id=<?php echo $id; ?>" style="border:2px solid #007bff;padding-top:2rem;
            padding-bottom:2rem;padding-left:1.5rem;padding-right:1.5rem;border-radius:10px;background:#fff
            
            ">
                    <div class="form-group">
                        <label>Select Subject</label>
                        <?php
                        $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
                        $subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
                        ?>
                        <select class="form-control" name="subject_id">
                            <option value="">Select Subject</option>
                            <?php while ($data = mysqli_fetch_array($subjects)) : ?>
                                <option value="<?= $data['id']; ?>" <?php $data['id'] ? 'selected' : null; ?>><?php echo $data['subject_name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Question</label>
                        <input type="text" class="form-control" value="<?php echo $row['question']; ?>" name="question">
                    </div>
                    <div class="form-group">
                    <label>Option One</label>
                        <input type="text" class="form-control" value="<?php echo $row['option_one']; ?>" name="option_one">
                    </div>
                    <div class="form-group">
                    <label>Option Two</label>
                        <input type="text" class="form-control" value="<?php echo $row['option_two']; ?>" name="option_two">
                    </div>
                    <div class="form-group">
                    <label>Option three</label>
                        <input type="text" class="form-control" value="<?php echo $row['option_three']; ?>" name="option_three">
                    </div>
                    <div class="form-group">
                    <label>Option four</label>
                        <input type="text" class="form-control" value="<?php echo $row['option_four']; ?>" name="option_four">
                    </div>
                    <div class="form-group">
                    <label>Correct Option</label>
                        <input type="text" class="form-control" value="<?php echo $row['correct_option']; ?>" name="correct_option">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-info">Update</button>
                        <a class="btn btn-primary" href="/admin-quiz">Back</a>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>