<?php
session_start();

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    try {
        $connString = "mysql:host=mysql-gcnews.alwaysdata.net;dbname=gcnews_bdd_v1;charset=utf8";
        $conn = new PDO($connString, 'gcnews', '359D655A');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected :)";
    } catch(PDOException $e) {
        echo "Not Connected :(" . $e->getMessage();
    }



    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $result = $conn->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]["pass"]))
        {
            $_SESSION['email'] = $email;
            header("Location: index.php");
        }
        else 
        {   
            // ---------------------------------- Renvois sur la page de connexion -------------------------------->
            header("Location: index.php");
        }
    }
    else 
    
    {
        

        // ------------------------------- Ajoute un user dans la base de donnees et chiffre le mot de passe ---------------------------------->
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, pass, classe_user) VALUES ('$email', '$pass', 'gtech') ";
        $req = $conn->prepare($sql);
        $req->execute();
        header("Location: index.php");
    }

}

?>