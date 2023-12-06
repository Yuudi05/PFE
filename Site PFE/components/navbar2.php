<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index1.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Annonce
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php">Tous les annonces</a></li>
            <li><a class="dropdown-item" href="anno-list.php">Mes annonces</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="anno-add.php">Ajouter annonce</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="forum.php">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Cours.php">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mess.php">Messagerie</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Gérer
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Manageprof.php">Gérer les professeurs</a></li>
            <li><a class="dropdown-item" href="Manageetu.php">Gérer les étudiants</a></li>
            <li><a class="dropdown-item" href="Manageanno.php">Gérer les annonces</a></li>
          </ul>

      </ul>
      <a href="disconnect.php" class="btn btn-success" >Déconnexion</a>
    </div>
  </div>
</nav>