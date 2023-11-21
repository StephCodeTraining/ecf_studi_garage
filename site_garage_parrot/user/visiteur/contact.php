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
    <section>
        <div class="container d-flex justify-content-center align-items-center m-3">
            <div>
                
                
                <?php 
 $br = '<br>';
 
 $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');
 
 
 if($pdo->exec('CREATE TABLE contacts (
    id INT(20) PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) ,
    prenom VARCHAR(100) ,
    email VARCHAR(100) ,
    message VARCHAR(250)
)') !== false) {
    echo 'Connexion réussie';
} else  {
    echo 'Connexion réussie' . $br;
}
// Ajout du contact / message
$new_contact = "INSERT INTO contacts (
    nom, prenom, email, message)
VALUES ('" . $_POST["contact_nom"] ."', '" .
        $_POST["contact_prenom"] . "', '" .
        $_POST["contact_mail"] . "', '" .
        $_POST["contact_message"] . "');";
        
        if($pdo->exec($new_contact)) {
            echo 'Votre message a bien été envoyé' . $br ;
        } else {
            echo 'Problème lors de l\'envoi du message .. ';
        }
        ?>
        <div>
             <button type="button" class="btn btn-outline-dark"><a href="..\..\index_garage_v-parrot.php">Retour au site</a></button>
        </div>
    </div>

</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>