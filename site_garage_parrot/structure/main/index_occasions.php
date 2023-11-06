<div class="container-fluid row justify-content-evenly">

<!-- --------------------------- Génération de Cartes voitures -->
<?php
$br = "<br>";

if($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost','root','')) {
    foreach ($pdo->query('SELECT * FROM voitures ;', PDO::FETCH_ASSOC) as $car) { ?>
        <div class="col-7 col-sm-5 col-lg-4 col-xl-3 m-2">
        <div class="card voitures">
      <img
        src="<?= $car['img'] ;?>"
        alt="sport"
        class="card-img-top rounded-3"
      />
      <div class="card-body ">
        <h6 class="card-title"><?= $car['nom'] ;?></h6>
        <p class="card-text">
            <ul>
                <li>Prix : <?= $car['prix'] ;?></li>
                <li>Année : <?= $car['annee_M_e_C'] ;?></li>
                <li>Kilometrage : <?= $car['kilometrage'] ;?></li>
            </ul>
        </p>
      </div>
      <div class="border-top text-center">
        <a href="" class="btn btn-outline-dark m-2">Détails</a>
    </div>
    </div>
  </div>
<?php 
    }
} ?>
