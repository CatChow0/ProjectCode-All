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

        <link rel="stylesheet" href="../CSS/admin.css"/>
        <link rel="stylesheet" href="../CSS/pagesadmin.css"/>
</head>

<body>

<!---------------------------NAVBAR------------------------------------------>

<?php
include '../admin/partials/header.php';
?>


<!--------------------------------MAIN CONTENT------------------------------------------->


    <!-- TITRE DE PAGE -->
    <h2 class="title-admin">BIENVENUE</h2>
    
    <!-- CARTES -->

    <div class="container">
        <!-- TITRE CATEGORIE -->
     <div class = "post-panel">
        <h5 class="title-category">Postes publiés</h5>
        <table width="150%">
            <thead>
                <tr>
                    <th width="45%">Titre</th>
                    <th>Catégorie</th>
                    <th>Classe</th>
                    <th width="10%"> </th>
                    <th width="10%"> </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="../article.php">Post 1</a></td>
                    <td>Business</td>
                    <td>G.Business</td>
                    <td><button href="#">Modifier</button></td>
                    <td><button href="#" class="supp">Supprimer</button></td>
                </tr>

                <tr>
                    <td>Post 2</td>
                    <td>Business</td>
                    <td>G.Tech</td>
                    <td><button href="#">Modifier</button></td>
                    <td><button href="#" class="supp">Supprimer</button></td>
                </tr>
            </tbody>
        </table>
     </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5ce7dcd1c0.js" crossorigin="anonymous"></script>

</body>
</html>