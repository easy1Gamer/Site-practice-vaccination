<h2 class="titre">Page Vaccination</h2>
<link rel="stylesheet" type="text/css" href="css/main.css">
<br>
<?php
    $lesCentres = selectAllCentres();
    $lesPatients = selectAllClients();
    $lesVaccins = selectAllVaccins();

    require_once('view/view_insert_vaccination.php');
    if(isset($_POST['Valider'])) {
        insertVaccination($_POST);

        echo '<br> Requete evoyée avec succès <br>';
    }

    $lesVaccinations = selectAllVaccinations();
    require_once('view/view_select_vaccination.php');
?>