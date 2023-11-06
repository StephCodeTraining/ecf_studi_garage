<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="..\sytle-garage.css">
</head>
<body>
    <header class="row row-between p-3">
        <div class="col-2">
            <a href="..\index_garage_v-parrot">
                <img class="img-logo" src="..\ressources\logo_garage.jpg" alt="">
            </a>
        </div>
        <h1 class="col">Espace Employé</h1>
    </header>
    <main class="container">
        <h3>Ajouter une voiture</h3>
        <form method="post" action=".\employer\actions\add_car.php">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text"
                class="form-control"
                name="nom"
                id="nom"
                >
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text"
                class="form-control"
                name="prix"
                id="prix"
                >
            </div>
            <div class="form-group">
                <label for="anneeM_M_e_C">Année de mise en circulation</label>
                <input type="text"
                class="form-control"
                name="annee_M_e_C"
                id="anneeM_M_e_C"
                >
            </div>
            <div class="form-group">
                <label for="kilometrage">Kilometrage</label>
                <input type="text"
                class="form-control"
                name="kilometrage"
                id="kilometrage"
                >
            </div>
            <div class="form-group">
                <label for="image">Image (lien)</label>
                <input type="text"
                class="form-control"
                name="image"
                id="image"
                >
            </div>
            <div class=" row d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-dark col-3 text-justify-content-end">Ajouter</button>
            </div>
        </form>
        <h3>Gestion des commentaires</h3>
        
        <?php 

        $br = '<br>';
        if ($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '')) {
            foreach ($pdo->query('SELECT * FROM commentaires ;', PDO::FETCH_ASSOC) as $com) {
                if(is_null($com['valid'] )) { ?>
                <div class="mt-2">
                    <?php echo $com['note'] . '/5  ' . $com['nom'] . ' : '.  $br .'" ' . $com['message'] .'" ' .$br; ?>
                </div>
                <form 
                action=".\employer\actions\valid_commentaires.php" method="post">
                    <div>
                        <input name="valid" value="1" type="radio">
                        <label for="<?php $com['nom']?>">Afficher</label>
                        <input name="valid" value="0" type="radio">
                        <label for="<?php $com['nom']?>">Supprimer</label>
                    </div>
                    <button name="id"  <?php echo'value="'. $com['id'].'"' ?> type="submit">Valider</button>
                </form>
            <?php
                }
            } 
        }    
            ?>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>