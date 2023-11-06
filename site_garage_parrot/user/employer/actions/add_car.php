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
        
<!-- Ajouter verif input -->

        <div>
            <?php
            $br = '<br>';
            
            $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');
            
            if($pdo->exec('CREATE TABLE voitures (
                id INT(20) PRIMARY KEY AUTO_INCREMENT,
                nom VARCHAR(100) ,
                prix INT(20) ,
                annee_M_e_C INT(4) ,
                kilometrage INT(10),
                img VARCHAR(250)
            )') !== false) {
                echo 'Table créée';
            } else  {
                echo 'Table deja créée' . $br;
            }
            
            $new_car = "INSERT INTO voitures (
                    nom, prix, annee_M_e_C, kilometrage, img)
                VALUES ('" . $_POST["nom"] ."', '" .
                    $_POST["prix"] . "', '" .
                    $_POST["annee_M_e_C"] . "', '" .
                    $_POST["kilometrage"] . "', '" .
                    $_POST["image"] . "');";
            
            if($pdo->exec($new_car) !== false) {
                echo 'Ajout de la voiture ' .$_POST['nom'] . ' effectué' . $br ;
            } else {
                echo 'Problème lors de l\'ajout de la voiture ';
                echo print_r($_POST);
            }
    ?>

<div>
    <button type="button" class="btn btn-outline-dark"><a href="..\..\space_employer.php">Retour à l'espace Employer</a></button>
    <button type="button" class="btn btn-outline-dark"><a href="..\..\..\index_garage_v-parrot.php">Retour au site</a></button>
</div>
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>