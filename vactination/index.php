<?php
    session_start();
    require_once('model/model.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="UTF-8">
    <title class="titre">Vaccination</title>
</head>
<body>
<center>
    <h1 class="site">Site de gestion des vaccination</h1>
    <?php
    if (! isset($_SESSION['email'])){
        require_once("view/view_connexion.php");
    }

    if (isset($_POST['Connexion'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $unePersonne = selectWherePersonne($email, $mdp);
//        var_dump($unePersonne);#
        if ($unePersonne) {
            $_SESSION['email'] = $unePersonne['email'];
            $_SESSION['nom'] = $unePersonne['nom'];
            $_SESSION['prenom'] = $unePersonne['prenom'];
            $_SESSION['role'] = $unePersonne['role'];

            header("Location: index.php?page=1");
        }
        else{
            echo "<br> Veuillez vérifieur vos identifiants";
        }
    }
    if (isset($_SESSION['email'])){

        echo'
        <a href="index.php?page=1"> <img src="images/icon_home.png" height="100" width="100" class="icon"> </a>
        <a href="index.php?page=2"> <img src="images/icon_patient.png" height="100" width="100" class="icon"> </a>
        <a href="index.php?page=3"> <img src="images/icon_hospital.png" height="100" width="100" class="icon"> </a>
        <a href="index.php?page=4"> <img src="images/icon_vaccin.png" height="100" width="100" class="icon"> </a>
        <a href="index.php?page=5"> <img src="images/icon_vaccination.png" height="100" width="100" class="icon"> </a>
        <a href="index.php?page=6"> <img src="images/icon_leave.png" height="100" width="100" class="icon"> </a>
    ';
}

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;

    }
    switch ($page) {
        case 1 : require_once ("home.php"); break;
        case 2 : require_once ("patient.php"); break;
        case 3 : require_once("centre.php"); break;
        case 4 : require_once ("vaccin.php"); break;
        case 5 : require_once ("vaccination.php"); break;
        case 6 : unset($_SESSION['email']); session_destroy(); header("Location: index.php");break;
        default : require_once ("home.php"); break;
    }
    ?>
</center>
</body>
<footer>
    <center>
        <div>
            <h1>contact</h1>
            <p>Téléphone : <a href="tel:+330780742182">+330780742182</a> /<a href="tel:+330612431449">+330612431449</a></p>
            <p>Mail :  <a href="mailto:jonathantossou32@gmail.com">jonathantossou32@gmail.com</a> /<a href="mailto:kovrevaleksej@gmail.com">kovrevaleksej@gmail.com</a></p>

        </div>
    </center>
</footer>
</html>
