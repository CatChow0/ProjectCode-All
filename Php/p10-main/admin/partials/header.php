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
        <link rel="script" href="JS/index.js"/>
</head>

<body>

   <!---------------------------NAVBAR------------------------------------------>

    <div class="wrapper">
        <div class="sidebar">

          <div class="title">
            <a href="../index.php"><img class="imglogogc" src="../assets/logogamingcampus.png" alt="Logo Gaming Campus" ></a>
            <a href="../index.php"><h2 class="imgtext">GC NEWS</h2></a>
          </div>


            <div class="li-main">
                <ul class="">
                    <li><a href="admin.php"><i class="fa-solid fa-house"></i>Dashboard</a>
                    <li><a href="#"><i class="fa-regular fa-calendar"></i>Activités</a>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Paramètres</a>
                </ul>
            </div>

            <div id="accordion">
                <div class="card-one">
                    <div class="card-header" id="headingOne">
                        <li class="post-toggle">
                            <a class="main-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Posts
                            </a>
                            <a class="main-add" href="add-article.php"><img src="../assets/plusicon.png"></i></a>
                        </li>
                    </div>
                
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="card-sub">
                            <li><a href="manage-article.php"><img src="../assets/check-mark.png">Posts publiés</a></li>
                        </ul>
                        <ul class="card-sub">
                            <li><a href="#"><img src="../assets/clock.png">Posts prévus</a></li>
                        </ul>
                        <ul class="card-sub">
                            <li><a href="#"><img src="../assets/favourite.png">Posts favoris</a></li>
                        </ul>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <li>
                      <a class="main-toggle" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Utilisateurs favoris
                      </a>
                      <a href="#"><img src="../assets/plusicon.png"></i></a>
                    </li>
                  </div>

                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
            </div>

            <div class="footernav">
                <ul>
                  <li>
                    <div class="line-top"></div>
                  </li>
                  <li class="add-new-user">
                    <a href="../register-page.php">
                      <img class="add-icon" src="../assets/addicon.png" alt="Add icon">
                      Ajouter un nouvel utilisateur
                    </a>
                  </li>
                  <li>
                    <div class="line-bot"></div>
                  </li>
                  <li class="add-new-admin">
                    <a href="#"><img class="add-icon" src="../assets/addicon.png">Ajouter un nouvel admin</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5ce7dcd1c0.js" crossorigin="anonymous"></script>
</body>
</html>