<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<div class="container d-flex justify-content-center align-items-center m-3">
<div>

<?php

$br = '<br>';

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

$periode = "";
$limite = "";

foreach($_POST as $key => $vlr) {
    if($key === 'periode') {
        $periode = $vlr;
    }
    if($key === 'limite') {
        $limite = $vlr;
    }
    $nmCol = $limite .'_'.$periode;
}


$nouvelle_heure = " UPDATE horaires SET " . $nmCol . "='" . $_POST['nouvel-horaire'] . "' WHERE jour='" . $_POST['jour-semaine']. "';";


if($pdo->exec($nouvelle_heure) !== false){
    echo 'Horaires modifiés : ' . $_POST['jour-semaine'];
} else {
    echo 'Echec de la modification de l\'horaire .. ' . $_POST['jour-semaine'];
}


?>
<!-- --------------------- Button Retour -->
<div class="text-center">
    <button class="btn btn-sm btn-outline-dark mt-3" type="button"><a href="..\..\space-admin.php">Retour à l'espace <br> Administrateur</a></button>
</div>
<div class="text-center">
    <button class="btn btn-outline-dark mt-3" type="button"><a href="..\..\..\index_garage_v-parrot.php">Retour au site</a></button>
</div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



</body>
</html>
