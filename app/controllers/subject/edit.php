<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
$id = $_GET['id'];

$query = $mysqli->query("SELECT * FROM subjects WHERE id='$id'") or die($mysqli->error);
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
    <div class="container" style="padding-top:5rem;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h2 style="text-align:center;font-size:25px;font-weight:600;padding-bottom:1.5rem">Update Subject</h2>
            <form method="POST" action="/app/controllers/subject/update.php?id=<?php echo $id; ?>" style="border:2px solid #007bff;padding-top:2rem;
            padding-bottom:2rem;padding-left:1.5rem;padding-right:1.5rem;border-radius:10px;background:#fff
            
            ">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $row['subject_name']; ?>" name="subject_name">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info">Update</button>
                    <a class="btn btn-primary" href="/admin-subject">Back</a>
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