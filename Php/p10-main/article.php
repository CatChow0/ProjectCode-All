<?php session_start();
    include 'partials/header.php';
    require_once('config/constants.php');

    $info = new takeinfo($conn);
    $art = $info->getArticle(1);
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
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        
        <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/index.css"/>
</head>

<body>

<!---------------------------ACCUEIL------------------------------------------>


<?php foreach ($art as $article)
    {
?>

<div class="main-article">
    <div class="title-art">
        <h4><?php echo $article['image_article']; ?></h4>
    </div>
    <div class="image-art">
        <!-- PROPRIETE DE L'IMAGE A REMPLACE, C'EST UN PLACEHOLDER -->
        <img src="<?php echo $article['titre_article']; ?>" alt="Image <?php echo $article['mots_cles_article']; ?>">
    </div>
    <div class="date-art">
        <p>Publié le <?php echo $article['date_publication']; ?></p>
    </div> 
    <div class="content-art">
        <p><?php echo $article['article_texte']; ?></p>
    </div>
    <div class="author-art">
        <p>Écrit par : <?php echo $article['email']; ?></p>
    </div> 
    <div class="like-art">
        <p><?php echo $article['like_article']; ?></p>
        <img type ="button" id="likeButton" onclick="like()" class="logo-like" src="assets/thumbs-up-solid.svg" alt="like-button">
    </div>
</div>

<?php
break;} 
?>


<!-----------------------------FOOTER---------------------------------------->
      
<?php
include 'partials/footer.php';
?>

<script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>