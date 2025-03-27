<h2 class="titre">Page Vaccin</h2>
<link rel="stylesheet" type="text/css" href="css/main.css">
<br>
<?php


$LeVaccin = null;
if (isset($_GET['action']) && isset($_GET['idvaccin'])) {
    $action = $_GET['action'];
    $idvaccin = $_GET['idvaccin'];
    if ($action == "sup") {
        deleteVaccin($idvaccin);
    }
    if ($action == "edit") {
        $LeVaccin = selectWhereVaccin($idvaccin);

    }
}

require_once("view/view_insert_vaccin.php");#

if (isset($_POST['Valider'])) {
    insertVaccin($_POST);

    echo '<br> Requete evoyée avec succès <br>';
}

if (isset($_POST['Modifier'])) {
    $tab = array(
        "idvaccin" => $_GET['idvaccin'],
        "designation" => $_POST['designation'],
        "dosage" => $_POST['dosage'],
        "rappel" => $_POST['rappel'],
        "c_indication" => $_POST['c_indication'],
        "laboratoire" => $_POST['laboratoire']
    );
    updateVaccin($tab);

    header("Location: index.php?page=4");
}

if (isset($_POST['Filtrer'])) {
    $filtre = $_POST['filtre'];
    $lesVaccins = selectLikeVaccins($filtre);
} else {
    $lesVaccins = selectAllVaccins();
}

require_once('view/view_select_vaccin.php');
?>
