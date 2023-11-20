<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="..\sytle-garage.css">
     <!-- Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <title>Espace Admin</title>
</head>
<body>
    <header class="row row-between p-3">
        <div class="col-2">
            <a href="..\index_garage_v-parrot">
                <img class="img-logo" src="..\ressources\logo_garage.jpg" alt="">
            </a>
        </div>
        <h1 class="col">Espace Administrateur</h1>
    </header>
    <main class="container">
        <!--  ---------------------------------- Ajout Employer -->
        <h2>Ajout d'Employer</h2>
        <div>
            <form method="post" action=".\admin\actions\add_employer">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" > 
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" > 
                </div>
                <div class="form-group">
                    <label for="email">Adresse Mail</label>
                    <input type="email" id="email" name="email" class="form-control" > 
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de Passe</label>
                    <input type="text" id="mdp" name="mdp" class="form-control" > 
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-outline-dark mt-2" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
        <div >
            <?php include '..\structure\main\horaires_garage.php' ?>
        </div>
         <!-- ---------------------------------------- Btn EDIT -->
         <div class="row row-even mt-2">
             <svg role="button" data-bs-toggle="modal" data-bs-target="#modif-horaires" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square text-dark text-center" viewBox="0 0 20 20">
                 <title>Modifier</title>
                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                </svg>
                <!-- ------------------------------------- Modal Modif Horaires -->
                <div class="modal" id="modif-horaires" tabindex="-1" role="dialog" aria-labelledby="idTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Modifier les horaires</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                <div class="modal-body">
                    <!-- Formulaire -->
                    <form class="container-fluid row" method="post" action=".\admin\actions\change_horaires.php">
                        <div class="col-4">
                        <select name="jour-semaine" id="jour-semaine">
                            <option value="lundi">Lundi</option>
                            <option value="mardi">Mardi</option>
                            <option value="mercredi">Mercredi</option>
                            <option value="jeudi">Jeudi</option>
                            <option value="vendredi">Vendredi</option>
                            <option value="samedi">Samedi</option>
                            <option value="dimanche">Dimanche</option>
                        </select>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input name="periode" value="matin" id="matin" type="radio">
                                <label for="matin">Matin</label>
                            </div>
                            <div class="form-check">
                                <input name="periode" value="apres_midi" id="apresMidi" type="radio">
                                <label for="apres-midi">Apres-midi</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input name="limite" value="ouverture" id="ouverture" type="radio">
                                <label for="ouverture">Ouverture</label>
                            </div>
                            <div class="form-check">
                                <input name="limite" value="fermeture" id="fermeture" type="radio">
                                <label for="fermeture">Fermeture</label>
                            </div>
                        </div>
                        <div class="form-group col-12 d-flex justify-content-between">
                            <label for="nouvel-horaire">Nouvel heure <br> (HH:mm)</label>
                            <input name="nouvel-horaire" id="nouvel-horaire" type="text">
                        </div>
                        <button type="submit">Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="changeHoraires()">Modifier</button>
                    <button attr data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="horaires-change.js"></script>

</body>
</html>