<div class="container-fluid row row-between">
    <div class="col-3 col-lg-1 p-2 col-center">
        <a href=".\index_garage_v-parrot.php">
            <img class="img-logo" src=".\ressources\logo_garage" alt="logo">
        </a>
    </div>
    <h1 id="top" class="col-3 col-center">Garage V.Parrot</h1>
    <!-- -------------------------------------- Btn Login -->
    <div class="col-3 col-center">
        <div>
            <button class=" p-1 btn login btn-outline-light" data-bs-toggle="modal" data-bs-target="#login-modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill text-dark" viewBox="0 0 20 20">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                </svg>
                Login
            </button>
        </div>
    </div>
    <!--  Modal Login -->
    <div class="modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="idTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="text-center">Connexion</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire -->
                <form method="post" action=".\user\login_garage_v-parrot.php">
                    <div class="form-group">
                        <label for="login-email">E-Mail</label>
                        <input type="e-mail"
                        name="login-email"
                        id="login-email" class="form-control"
                        >
                    </div>
                    <div class="form-group">
                        <label for="login-mdp">Mot de passe</label>
                        <input type="password"
                        name="login-mdp"
                        id="login-mdp" class="form-control">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-dark mt-2" type="submit" >Se Connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- admin(steph.codetraining@yahoo.com, mdp) -->
</div>
<!-- -------------------------------------------------- Nav -->
<nav class="navbar navbar-expand-sm ">
  <div class="container-fluid">
    <a class="navbar-brand" href=".\index_garage_v-parrot.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href=".\occasions.php">Vehicules d'Occasion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>