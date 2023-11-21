<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiation Site</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="..\..\sytle-garage.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="text-center">Validation Administrateur</h1>
    </header>
    <main class="container col-center">

        <?php
        $br = '<br>';
        
        $pdo = new PDO('mysql:host=localhost', 'root', '');

        // ----------------------- Création Base de Données

        if($pdo->exec('CREATE DATABASE garage_v_parrot;') === false) {
            echo 'Base de Données deja créée' .$br;
        } else {
            $pdo->exec('CREATE DATABASE garage_v_parrot;');
                echo 'Base de données créée' .$br;
            }

        $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

        echo $br;
        // ----------------------- Création Table Employers

        $admin_exist = false;

        if($pdo->exec('CREATE TABLE employers (
            id INT(10) PRIMARY KEY AUTO_INCREMENT,
            nom VARCHAR(20) ,
            prenom VARCHAR(20) ,
            email VARCHAR(50) ,
            mdp VARCHAR(50),
            admin BOOLEAN
                )') !== false) {
                    echo 'Table employers créée' .$br;
                } else  {
                    echo 'Table employers deja créée' . $br;
                    foreach ($pdo->query('SELECT * FROM employers', PDO::FETCH_ASSOC) as $user) {
                        if ($user['admin'] === '1') {
                            $admin_exist = true;
                        }
                    }
                }   
                 echo $br ;
        // ----------------------- Création Administrateur
        
        if ($admin_exist === false) {
            
            $new_employer = "INSERT INTO employers (
            nom, prenom, email, mdp, admin)
            VALUES ('" . $_POST["admin_nom"] ."', '" .
                    $_POST["admin_prenom"] . "', '" .
                    $_POST["email"] . "', '" .
                    $_POST["mdp"] . "', '" .
                    $_POST["confirm_admin"] . "');";
                    
                    if($pdo->exec($new_employer) !== false) {
                        echo 'Ajout de l\'administrateur ' .$_POST['admin_nom'] . ' effectué' . $br ;
                    }
                } else {
                    echo'L\'administrateur du site a déja été créé'.$br;
                }
             echo $br;
        // --------------------  Création Table Horaires

        $days_of_week = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

        $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

        if($pdo->exec('CREATE TABLE horaires (
            id INT(20) PRIMARY KEY AUTO_INCREMENT,
            jour VARCHAR(100) ,
            ouverture_matin VARCHAR(20),
            fermeture_matin VARCHAR(20) ,
            ouverture_apres_midi VARCHAR(20) ,
            fermeture_apres_midi VARCHAR(20) 
        )') !== false) {
            echo 'Table horaires créée';
            foreach($days_of_week as $day) {
                $dayOfWeek = "INSERT INTO horaires (
                    jour, ouverture_matin, fermeture_matin, ouverture_apres_midi, fermeture_apres_midi)
                VALUES ('" . $day . "', '" .
                        "08:45" . "', '" .
                        "12:00" . "', '" .
                        "14:00" . "', '" .
                        "18:00" . "');";
                if($pdo->exec($dayOfWeek) !== false) {
                        echo 'Journée  ' . $day . ' enregistrée' . $br ;
                    } else {
                        echo 'Problème lors de l\'ajout de la journée : '.$day;
                    }
            } 
        } else  {
            echo 'Table horaires deja créée' . $br;
        }
            echo $br;

            // --------------------  Création Table Voitures
            
            $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');
            
            if($pdo->exec('CREATE TABLE voitures (
                id INT(20) PRIMARY KEY AUTO_INCREMENT,
                nom VARCHAR(100) ,
                prix INT(20) ,
                annee_M_e_C INT(4) ,
                kilometrage INT(10),
                img VARCHAR(250)
            )') !== false) {
                echo 'Table voitures créée';

                //  Voitues d'exemple
                $new_car = "INSERT INTO voitures (
                    nom, prix, annee_M_e_C, kilometrage, img)
                VALUES ('Peugeot_208', '11499', '2013', '94027', 'https://th.bing.com/th/id/R.77b6d74bbd815e01a9f605e9a9930d50?rik=WBZof1c1FOgJEw&pid=ImgRaw&r=0');";
            
            if($pdo->exec($new_car) !== false) {
                echo 'Ajout de la voiture d\'exemple effectué' . $br ;
            } else {
                echo 'Problème lors de l\'ajout de la voiture d\'exemple';
            }
            } else  {
                echo 'Table voitures déjà créée' . $br;
            }

            echo $br;
        // --------------------  Création Table Contacts
        
        $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');
        
        
        if($pdo->exec('CREATE TABLE contacts (
                id INT(20) PRIMARY KEY AUTO_INCREMENT,
                nom VARCHAR(100) ,
                prenom VARCHAR(100) ,
                email VARCHAR(100) ,
                message VARCHAR(250)
            )') !== false) {
                echo 'Table contacts créée' .$br;
            } else  {
                echo 'Table contacts deja créée' . $br;
            }

            echo $br;
        // --------------------  Création Table commentaires

        $pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

        if($pdo->exec('CREATE TABLE commentaires (
            id INT(20) PRIMARY KEY AUTO_INCREMENT,
            nom VARCHAR(100),
            message VARCHAR(250) ,
            note INT(1),
            valid BOOLEAN
        )') !== false) {
            echo 'Table commentaires créée';
        } else  {
            echo 'Table commentaires deja créée' . $br;
        }
    ?>

    <div class="col-center">
        <button type="button" class="btn"><a href="..\..\index_garage_v-parrot.php">Accéder au site</a></button>
    </div>

</main>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="horaires-change.js"></script>
</body>
</html>