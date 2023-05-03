<?php 
require_once('config/constants.php');

if(isset($_POST['send']) && $_POST['send'] == 'Envoyer')
{
    echo '<pre>';
    print_r($_POST);
    echo '</pre>'; 
    //vérification que les champs soient corrects 


    //si les champs sont corrects, alors intégration en bdd : 
    
    $query = $conn->prepare("SET FOREIGN_KEY_CHECKS = 0;
    INSERT INTO `article`(`id_article`, `id_auteur`, `titre_article`, `description_article`, `image_article`, `classe_article`, `article_texte`, `date_publication`, `mots_cles_article`, `categorie_article`, `like_article`) 
    VALUES (':id_article', ':id_auteur', ':titre_article', ':description_article', ':image_article', ':classe_article', ':article_texte', ':date_publication', ':mots_cles_article', ':categorie_article', ':like_article');
    SET FOREIGN_KEY_CHECKS=1;");

    $query->execute(array(
        ':id_article' => null, 
        ':id_auteur' => null, 
        ':titre_article' => $_POST['titre_article'], 
        ':description_article'=> $_POST['description_article'], 
        ':image_article' => $_POST['image'], 
        ':classe_article' => $_POST['classe'], 
        ':article_texte' => $_POST['texte_article'], 
        ':date_publication' => null, 
        ':mots_cles_article' => null, 
        ':categorie_article' => $_POST['cat'], 
        ':like_article' => null,
    ));
    echo '<pre>';
    print_r($_POST['titre_article']);
    echo '</pre>';
}

?>


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

<!----------------------------------------MAIN CONTENT--------------------------------------------------------->

    <!-- TITRE DE PAGE -->
    <h2 class="title-admin">BIENVENUE ANTHONY</h2>

    <!-- CARTES -->

    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">

            <!-- TITRE -->
            <div class="title-input">
                <label for="titre"><h5>Titre</h5></label>
                <input type="text" class="titre" id="titre" name="titre_article">
            </div>

            <!-- DESCRIPTION -->
            <div class="des-input">
                <label for="comment"><h5>Description</h5></label>
                <input class="form-control" rows="5" id="comment" name="description_article"></input>
            </div>

            <div class="text-input">
                <label for="texte"><h5>Texte</h5></label>
                <textarea class="form-control" rows="10" id="texte" name="texte_article"></textarea>
            </div>

            <div class="row">
                <!-- SUJET -->
                <div class = "col-md-auto mx-5">
                <div class = "cat-input">
                    <label for="cat"><h5>Catégorie :</h5></label>
                        <select id="cat" name="cat" name="subject">
                            <option value="jeux_videos">Jeux vidéos</option>
                            <option value="e_sport">E-sport</option>
                            <option value="business">Business</option>
                            <option value="politique">Politique</option>
                            <option value="design">Design</option>
                        </select>
                    </div>
                </div>

                <!-- CLASSE -->
                <div class="col-md-auto">
                     <div for="classe">
                         <h5>Classe :</h5>
                     </div>
                </div>

                <div class="col-md-auto">
                    <input class="form-check-input" type="radio" name="classe" id="gtech" checked value="gtech">
                    <label class="form-check-label" for="gtech">
                        G. Tech
                    </label>
                </div>

                <div class="col-md-auto">
                    <input class="form-check-input" type="radio" name="classe" id="gart" value="gart">
                    <label class="form-check-label" for="gart">
                        G. Art
                    </label>
                </div>

                <div class="col-md-auto">
                    <input class="form-check-input" type="radio" name="classe" id="gbusiness" value="gbusiness">
                    <label class="form-check-label" for="gbusiness">
                        G. Business
                    </label>
                </div>
            </div>

            <!-- KEYWORDS -->
            <div class="keywords-input">
                <label for="keyword"><h5>Entrez des mots clés (merci d'espacer chaque mots-clés) :</h5></label>
                <input type="text" class="form-control" id="keyword">
            </div>

            <!-- IMAGE -->
            <div class="img-input">
                <label for="imageinp"></label>
                <input type="file" id="imageinp" value="image_article" name="image"accept="image/png, image/jpeg">
            </div>

            <!-- SUBMIT -->
            <div class="submit-btn">
                <input type="submit" value="Envoyer" name="send">
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5ce7dcd1c0.js" crossorigin="anonymous"></script>
</body>
</html>