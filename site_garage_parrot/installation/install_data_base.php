<!-- ------------------ --------Instalation BD table horaires

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
     echo 'Table créée';
 } else  {
     echo 'Table deja créée' . $br;
 }

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
                 echo 'Problème lors de l\'ajout de la voiture ';
             }
 } -->