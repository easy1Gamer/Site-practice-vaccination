<h2 class="titre">Page Patient</h2>
<link rel="stylesheet" type="text/css" href="css/main.css">
<br>
<?php


$leClient = null;
if (isset($_GET['action']) && isset($_GET['idpersonne'])) {
    $action = $_GET['action'];
    $idpersonne = $_GET['idpersonne'];
    if ($action == "sup") {
        deleteClient($idpersonne);
    }
    if ($action == "edit") {
        $leClient = selectWhereClient($idpersonne);

    }
}

require_once("view/view_insert_patient.php");#

if(isset($_POST['Valider'])) {
    insertClient($_POST);

    echo '<br> Requete evoyée avec succès <br>';
}

if(isset($_POST['Modifier'])) {
    $tab = array(
        "idpersonne" => $_GET['idpersonne'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "adresse" => $_POST['adresse'],
        "age" => $_POST['age'],
        "email" => $_POST['email'],
        "mdp" => $_POST['mdp'],
        "role" => $_POST['role']
    );
    updateClient($tab);

    header("Location: index.php?page=2");
}

if(isset($_POST['Filtrer'])) {
    $filtre = $_POST['filtre'];
    $lesClients = selectLikeClients($filtre);
}
else {
    $lesClients = selectAllClients();
}

require_once('view/view_select_patient.php');
?>