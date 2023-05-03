<?php
require 'config/database.php';

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
        <!----------------------------------- POLICES UTILISEES -------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="./css/index.css"/>
        <link rel="stylesheet" href="./css/login.css">
</head>

  <body>

   <!--------------------------------------------------------------------->

   <div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <img class="imglogogc" src="./assets/logogamingcampus.png" alt="Logo Gaming Campus" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <h1 class="nav-link" href="index.php">GC NEWS<br><span>Toute l'actualité du jeu vidéo et du Gaming Campus à votre portée !</span><span class="sr-only"></span></h1>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                ACTUALITÉS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">TENDANCES</a>
                <a class="dropdown-item" href="#">JEU VIDÉO</a>
                <a class="dropdown-item" href="#">ESPORT</a>
                <a class="dropdown-item" href="#">POLITIQUE</a>
                <a class="dropdown-item tendance" href="#">DESIGN</a>
                <a class="dropdown-item" href="#">BUSINESS</a>

                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <div class="submenu">
                      <a class="dropdown-item" href="#">SPÉCIAL GBUSINESS</a>
                      <a class="dropdown-item" href="#">SPÉCIAL GART</a>
                      <a class="dropdown-item" href="#">SPÉCIAL GTECH</a>
                      <a class="dropdown-item" href="#">RECENTS</a>
                      <a class="dropdown-item" href="#">NON RECENTS</a>
                      <a class="dropdown-item" href="#">ARCHIVES</a>
                    </div>
                  </li>
                </ul>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                CAMPUS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PROJET EN COURS</a>
                <a class="dropdown-item" href="#">CONCOURS</a>
                <a class="dropdown-item" href="#">OBJETS PERDUS/TROUVÉS</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                VIE ASSOCIATIVE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">KATOCHI</a>
                <a class="dropdown-item" href="#">BDE</a>
                <a class="dropdown-item" href="#">GENIUS</a>
                <a class="dropdown-item" href="#">2RIVALS</a>
                <a class="dropdown-item" href="#">WEB FACTORY</a>
              </div>
            </li>


            <!--------------------SEARCH--------------------------------->
            <div class="search-box">
              <button class="btn-search"><i class="fa fa-search"></i></button>
              <input type="text" class="input-search" placeholder="Que cherchez-vous ?">
            </div>

            <?php
            if (isset($_SESSION['email']))
            {
              ?>
              <!--------------------PROFILE--------------------------------->
            <div class="profile-btn">
              <a href="./admin/admin.php" title="Profil">
                <img class="iconprofil" src="./assets/iconprofile.png" alt="Profil" width="32px" 
                height="32px">
              </a>
            </div>

            <!------------------------------- Bouton logout --------------------------------->
            <div>
              <a href="#" title="Logout">
                <img class="logout-menu" src="./assets/logout.png" alt="logout" >
              </a>
            </div>
            <?php
            }
            ?>

          </ul>
        </div>
      </nav>
    </div>
    <!-------------------------- Interface déconnexion --------------------------->
    <?php
    if (isset($_SESSION['email'])) 
    {
      ?>
    <div class="profile-logout ">
      <div class="btn-logout">
        <a class="text-animated" href="logout.php" >
          DÉCONNEXION
        </a>
        <div class="close-menu">
          <p>
            X
          </p>
        </div>
        
        
      </div>
    </div>
    <?php
    }
    else 
    {

    }
    
    ?>
    
    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>