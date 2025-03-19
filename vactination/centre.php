<h2 class="titre">Page Centre</h2>
<link rel="stylesheet" type="text/css" href="css/main.css">
 <br>
<?php
    $leCentre = null;
    if (isset($_GET['action']) && isset($_GET['idcentre'])){
        $action = $_GET['action'];
        $idcentre = $_GET['idcentre'];
        if ($action == "sup") {
            deleteCentre ($idcentre);
        }
        if ($action == "edit") {
            #recupere le centre de la BDD
            $leCentre = selectWhereCentre($idcentre);
        }
    }

    require_once("view/view_insert_centre.php");

    if(isset($_POST['Valider'])) {
        insertCentre($_POST);

        echo  "<br> Requete envoyé avec succès <br>";
    }

    if(isset($_POST['Modifier'])) {
        $tab = array(
                "idcentre"=>$_GET['idcentre'],
                "nom"=>$_POST['nom'],
                "adresse"=>$_POST['adresse'],
                "typecentre"=>$_POST['typecentre'],
                "telephone"=>$_POST['telephone']
            );
        updateCentre($tab);

        header("Location: index.php?page=3")   ;
    }

    if(isset($_POST['Filtrer'])) {
        $filtre = $_POST['filtre'];
        $lesCentres = selectLikeCentres($filtre);
    }
    else {
        $lesCentres = selectAllCentres();
    }


    //affichage des centres
    require_once('view/view_select_centres.php');

?>
