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

$pdo = new PDO('mysql:host=localhost', 'root', '');

if($pdo->exec('CREATE DATABASE garage_v_parrot;') === false) {
    echo 'Base de Données deja créée' .$br;
} else {
    $pdo->exec('CREATE DATABASE garage_v_parrot;');
    echo 'Base de données créée' .$br;
}

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

if($pdo->exec('CREATE TABLE employers (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20) ,
    prenom VARCHAR(20) ,
    email VARCHAR(50) ,
    mdp VARCHAR(50) 
)') !== false) {
    echo 'Table créée';
} else  {
    echo 'Table deja créée' . $br;
}

$new_employer = "INSERT INTO employers (
    nom, prenom, email, mdp)
VALUES ('" . $_POST["nom"] ."', '" .
        $_POST["prenom"] . "', '" .
        $_POST["email"] . "', '" .
        $_POST["mdp"] . "');";

if($pdo->exec($new_employer) !== false) {
        echo 'Ajout de l\'employer ' .$_POST['nom'] . ' effectué' . $br ;
    }
?>

<div>
    <button type="button" class="btn btn-outline-dark" > <a href="..\..\space-admin">Retourà l'espace Administrateur</a></button>
</div>
<div>
    <button type="button" class="btn btn-outline-dark" > <a href="..\..\..\index_garage_v-parrot.php">Retour au site</a></button>
</div>


</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



</body>
</html>