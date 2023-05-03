<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GC News</title>
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
        <link rel="stylesheet" href="../css/admin.css"/>
</head>

<body>

<!---------------------------NAVBAR------------------------------------------>

<?php
include 'partials/header.php';
?>


<!----------------------------------------MAIN CONTENT--------------------------------------------------------->



    <!-- TITRE DE PAGE -->
    <h2 class="title-admin">BIENVENUE</h2>
    
    <!-- CARTES -->

    <div class="container">
        <!-- TITRE CATEGORIE -->
        <h5 class="title-category">Ces 30 derniers jours</h5>
        <div class="row">
            <div class="col-md-auto">
                <div class="recents-card card">
                    <h6 class="recents-title">VIEWS</h6>
                    <p class="recents-number">111111</p>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="recents-card card">
                    <h6 class="recents-title">FOLLOWS</h6>
                    <p class="recents-number">222222</p>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="recents-card card">
                    <h6 class="recents-title">LIKES</h6>
                    <p class="recents-number">333333</p>
                </div>
            </div>
        </div>
        <!-- TITRE CATEGORIE -->
        <h5 class="title-category">Analyse</h5>
        <div class="row">
            <div class="col-md-auto">
                <div class="daily-card card">
                    <div class="card-body">
                        <p class="card-title">Daily views</p> 
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="resultats-card card">
                    <div class="card-body">
                        <p class="card-title">Résultats des 30 derniers jours</p>
                        <div class="like-link">
                            <a href="#">
                                <i class="fa-solid fa-circle fa-2x circle1"></i>
                                <i class="fa-solid fa-heart"></i>
                            </a>
                            <p class="card-like">Likes</p>
                        </div>
                        <div class="vues-link">
                            <a href="#">
                                <i class="fa-solid fa-circle fa-2x circle2"></i>
                                <i class="fa-solid fa-arrow-right-arrow-left fa-rotate-90 arrows"></i>
                            </a>
                            <p class="card-vues">Vues</p>
                        </div>
                        <div class="inscrits-link">
                            <a href="#">
                                <i class="fa-solid fa-circle fa-2x circle3"></i>
                                <i class="fa-solid fa-user-plus"></i>
                            </a>
                            <p class="card-inscrits">Utilisateurs<br>inscrits</p>
                        </div>
                        <div class="partages-link">
                            <a href="#">
                                <i class="fa-solid fa-circle fa-2x circle4"></i>
                                <i class="fa-regular fa-comment-dots"></i>
                            </a>
                            <p class="card-partages">Partages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row2">
            <div class="col-md-auto">
                <div class="audio-card card">
                    <div class="card-body">
                        <h5 class="card-title">1</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="post-card card">
                    <div class="card-body card1">
                        <div class="posts-link">
                            <a href="#">
                                <i class="fa-solid fa-circle fa-3x circle5"></i>
                                <i class="fa-solid fa-xl fa-calendar calendar-icon"></i>
                            </a>
                        </div>
                        <p class="card-posts">Posts prévus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="new-post-card card">
                    <div class="card-body card2">
                        <div class="new-posts-link">
                            <a href="add-article.php">
                                <i class="fa-solid fa-circle fa-3x circle6"></i>
                                <i class="fa-solid fa-xl fa-plus"></i>
                            </a>
                        </div>
                        <p class="card-new-posts">Ajouter un nouveau post</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- TITRE CATEGORIE -->
        <h5 class="title-category">Statistiques</h5>
        <div class="row">
            <div class="col-md-auto">
                <div class="stats-card card">
                    <div class="card-body">
                        <p class="card-title">OBJECTIFS HEBDOMADAIRES ATTEINT A 25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="stats-card card">
                    <div class="card-body">
                        <p class="card-title">OBJECTIFS MENSUELS ATTEINT A 50%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5ce7dcd1c0.js" crossorigin="anonymous"></script>
</body>
</html>