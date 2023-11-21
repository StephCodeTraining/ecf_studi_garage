<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="..\sytle-garage.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="col-center">
            <h1>Initialisation du site</h1>
        </div>
    </header>
    <main class="container col-center">
        <!-- Création Admin -->
        <section class="row row-even col-8 m-2">
            <div>
                <h3>Administrateur</h3>
            </div>
            <div>
                <form action=".\validation\valid_admin.php" method="post">
                    <h6>Entrer un Administrateur pour le site</h6>
                    <!-- Nom -->
                    <div class="form-group">
                        <label for="admin_nom">Nom</label>
                        <input type="text" name="admin_nom" class="form-control">
                    </div>
                    <!-- Prénom -->
                    <div class="form-group">
                        <label for="admin_prenom">Prénom</label>
                        <input type="text" name="admin_prenom" class="form-control">
                    </div>
                    <!-- E-mail -->
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <!-- Mot de passe -->
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control">
                    </div>
                    <div class="row row-even p-2">
                        <!-- Checkbox -->
                        <div class=" col-4  form-check">
                            <label class="form-check-label" for="chkb1"> Administrateur</label>
                            <input name="confirm_admin" id="confirm_admin"
                            value="1" type="checkbox" class="form-check-input" checked>
                        </div>
                        <div class="col-4 col-center">
                            <button type="submit" class="ps-3 pe-3 btn btn-outline-dark">Créer</button>
                        </div>
                    </div>
                </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
</div>