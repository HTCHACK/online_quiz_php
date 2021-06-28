<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <?php

    require 'views/layouts/head.php';

    ?>
</head>

<body>
    <?php

    require 'views/layouts/menu.php';
    ?>

    <div class="container" style="padding-top:2rem">

        <div class="row">
            <?php if ($subjects->num_rows > 0) : ?>
                <?php while ($data = mysqli_fetch_array($subjects)) : ?>
                    <div class="col-md-4" style="padding-bottom:2rem">
                        <div class="card" style="width: 18rem;">
                            <img src="img.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['subject_name']; ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="test.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Start Test</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else:?>
                <h1>No Subject Added yet</h1>
            <?php endif; ?>
        </div>

    </div>

    <?php
    require 'views/layouts/footer.php';
    require 'views/layouts/script.php';

    ?>
</body>

</html>