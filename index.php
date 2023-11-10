
<?php include './views/header.php';?>
<link rel="stylesheet" href="css/style.css">

<!-- Insert Page Code here -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\taxi-association.png"d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>South African Taxi Association </h5>
        <p>Fleet Taxi Association Managment System.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\sa-taxi-.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second Img Of Taxi Organisation</h5>
        <p>Fleet Taxi Association Managment System.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\download.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>The Individual In The Queue Are Pantiently Awaiting The Arrival Of Taxis </h5>
        <p>Fleet Taxi  Association Management System .</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End of Page Code -->
    <?php include './views/footer.php';?>