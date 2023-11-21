<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="..\..\sytle-garage.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center m-3">
<div>


<?php

$br = '<br>';

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

if($pdo->exec('CREATE TABLE commentaires (
    id INT(20) PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    message VARCHAR(250) ,
    note INT(1),
    valid BOOLEAN
)') !== false) {
    echo 'Table créée';
} else  {
    echo 'Table deja créée' . $br;
}

$nouveau_commentaire = "INSERT INTO commentaires (
    nom, message, note)
VALUES ('" . $_POST["expediteur"] ."', '" .
        $_POST["message"] . "', '" .
        $_POST["note"] . "');";

if($pdo->exec($nouveau_commentaire)) {
    echo 'Merci ' . $_POST['expediteur'] . ', ' . $br . 'Votre commentaire nous a bien été envoyé.' . $br;
} else {
    echo 'Toutes nos excuses ' . $_POST['expediteur'] .',' . $br . 'Nous recontrons un problème lors de l\'envoi de votre commentaire.. ' . $br;
}
    ?>
    <div>
        <button type="button" class="btn btn-outline-dark"> <a href="..\..\index_garage_v-parrot.php">Retour au site</a></button>
    </div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



</body>
</html>