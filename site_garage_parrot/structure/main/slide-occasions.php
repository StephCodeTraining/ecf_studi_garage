<div id="carouselOccasions" class="carousel slide col-center">
  <div class="carousel-inner ">
      <div class="carousel-item active ">
        <div class="col-center">
          <h6>Dernières Arrivées</h6>
          <div class="col-center">
            <img class="crsl-img logo-occasion" src=".\ressources\img_slide.jpg" alt="">
          </div>
        </div>
      </div>
<?php 
  if($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost','root','')) {
    foreach ($pdo->query('SELECT nom, img From voitures ORDER BY id DESC LIMIT 5') as $car) { ?>
    <div class="carousel-item">
       <img src="<?= $car['img'] ?>" class=" crsl-img d-block w-100" alt="<?=$car['nom']?>" />
    </div>
    
<?php      
    }
    
  }
  ?>



</div>


  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselOccasions"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
    <span class="visually-hidden"> Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselOccasions"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"> </span>
    <span class="visually-hidden"> Next</span>
  </button>
</div>
 

       