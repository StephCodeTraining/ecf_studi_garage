<!-- Filtre -->
<div>
  <button class="btn btn-outline-light" id="activeFiltre">Filtres</button>
</div>
<div class="hide displayChange" id="filtreOccasions">

<form action="" method="get">
  <div class="row row-even">
    <!-- Année -->
    <div class="col-10 col-sm-5">
      <div class="col-center form-group">
        <label for="anneeCirculation">Mise en circulation</label>
        <select class="col-6 form-control" name="anneeCirculation" id="anneeCirculation">
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
      </select>
    </div>
    <!-- Kilometrage -->
    <div class="col-center">
      <label for="kilometrage">Kilometrage (minimum)</label>
      <select class="col-6 form-control" name="kilometrage" id="kilometrage">
        <option value="0">0</option>
        <option value="50000">50000</option>
        <option value="100000">100000</option>
        <option value="150000">150000</option>
      </select>
    </div>
  </div>
  <div class="col-10 col-sm-4 ">
    <div class="form-group col-center">
      <label class="col" for="filtrePrixMin">Prix</label>
      <input id="filtrePrixMin" name="filtrePrixMin" class="col-6 form-control" type="text" placeholder="Minimum">
    </div>
    <div class="col-center mt-2">
      <button id="filtreOccasions" class="btn btn-outline-dark" type="submit" >Rechercher</button>
    </div>
  </div>
  </div>
</form>
</div>


<!-- --------------------------- Génération de Cartes voitures -->
<div class="container-fluid row justify-content-evenly">

<?php
$br = "<br>";

$fltreAnneeCirculation = 2010;
$fltreKilometrage = 0;
$filtrePrix = 0;

if($_GET) {
  $fltreAnneeCirculation = $_GET['anneeCirculation'];
  $fltreKilometrage = $_GET['kilometrage'];
  $filtrePrix = $_GET['filtrePrixMin'];
}

if($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost','root','')) {
    foreach ($pdo->query('SELECT * FROM voitures ;', PDO::FETCH_ASSOC) as $car) { 
      if ( $fltreAnneeCirculation <= $car['annee_M_e_C'] 
      && $fltreKilometrage <= $car['kilometrage'] 
      && $filtrePrix <= $car['prix']) { ?>
        <div class="col-10 col-sm-5 col-lg-4 col-xl-3 m-2">
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
    }
  } ?>
