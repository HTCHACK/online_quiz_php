<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
$id = $_GET['id'];

$query = $mysqli->query("SELECT * FROM subjects WHERE id='$id'") or die($mysqli->error);
$quizs = $mysqli->query("SELECT * FROM quizs WHERE subject_id='$id'") or die($mysqli->error);
//$query=mysqli_query($db,"select * from subjects where id='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="/subject">Subjects</a>
                </li>


            </ul>
        </div>
    </nav>

    <div class="container" style="padding-top:3rem;">
        <h1 style="text-align:center;font-size:25px;font-family:sans-serif;font-weight:600">Start the Test in - <?php echo $row['subject_name']; ?></h1>
    </div>

    <div class="container" style="padding:3rem;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="POST" action="/result" style="border:2px solid #3dcfd3;padding:1rem;border-radius:10px">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name.." required>
                    </div>
                    <div class="form-group">
                        <?php foreach ($quizs as $quiz) : ?>
                        <input type="hidden" name="quiz_id" value="<?php echo $quiz['id']; ?>">
                            <label><?= $quiz['question'] ?></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="option_one" id="inlineRadio4" value="<?= $quiz['option_one']; ?>">
                                <label class="form-check-label" for="inlineRadio4   " >
                                    <?= $quiz['option_one']; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="option_two" id="inlineRadio4" value="<?= $quiz['option_two']; ?>">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $quiz['option_two']; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="option_three" id="inlineRadio4" value="<?= $quiz['option_three']; ?>">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $quiz['option_three']; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="option_four" id="inlineRadio4" value="<?= $quiz['option_four']; ?>">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $quiz['option_four']; ?>
                                </label>
                            </div>
                            <br>
                        <?php endforeach; ?>
                       
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-info" name="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>