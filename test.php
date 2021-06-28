<?php

$mysqli = mysqli_connect("127.0.0.1", "root", "", "myDB");
$id = $_GET['id'];
$query = $mysqli->query("SELECT * FROM subjects WHERE id='$id'");
$sql = "SELECT * FROM quizs WHERE subject_id='$id'";
$result = $mysqli->query($sql);




//$quizs = $mysqli->query("SELECT * FROM quizs WHERE subject_id='$id'");
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
                <form method="post" action="/users" style="border:2px solid #3dcfd3;padding:1rem;border-radius:10px">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name.." required>
                        <input type="hidden" name="subject_id" value="<?= $id;?>">
                    </div>
                    <div class="form-group">


                        <?php while ($data = $result->fetch_assoc()) : ?>
                            <input type="hidden" name="<?= $data['id']; ?>" value="<?= $data['id'] ?>">
                            <label><?= $data['question'] ?></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $data['id'] ?>" id="inlineRadio4" value="1">
                                <label class="form-check-label" for="inlineRadio4   ">
                                    <?= $data['option_one'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $data['id'] ?>" id="inlineRadio4" value="2">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $data['option_two'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $data['id'] ?>" id="inlineRadio4" value="3">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $data['option_three'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $data['id'] ?>" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">
                                    <?= $data['option_four'] ?>
                                    </labelb>
                            </div>
                            <br>
                        <?php endwhile;?>


                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="subjects">Submit</button>
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