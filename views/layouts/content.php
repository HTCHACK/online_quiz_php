<div class="contaier">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container" style="padding-top:2rem;padding-bottom:4rem">
    <h1 style="text-align:center;padding-top:1.5rem">Our Subjects</h1>
    <div class="row">
    <?php 
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'myDB') or die(mysqli_error($mysqli));
    $subjects = $mysqli->query("SELECT * FROM subjects ORDER BY id DESC") or die($mysqli->error);
    foreach($subjects as $subject):?>
        <div class="col-md-4" style="padding-top:2rem">
            <div class="card" style="width: 18rem;">
                <img src="img.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $subject['subject_name']; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/subject" class="btn btn-primary">Subjects</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

</div>