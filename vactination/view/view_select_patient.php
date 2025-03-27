<h3 class="sous"> Liste des patients</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">

<form method="post" class="form">
    Filtrer les Clients par:
    <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer" class="filterbutton">
</form>

<table border='1' class="aff">
    <tr class='affi'>
        <td> ID Patient</td>
        <td> Nom du patient</td>
        <td> Prenom du patient</td>
        <td> Adresse du patient</td>
        <td> Age du patient</td>
        <td> E-mail du patient</td>
        <td> Mot de passe du patient</td>
        <td> Role du patient</td>
        <td> Operations</td>
    </tr>

    <?php
    foreach ($lesClients as $unClient) {
        echo "<tr class='affi'>";
        echo "<td>".$unClient['idpersonne']."</td>";
        echo "<td>".$unClient['nom']."</td>";
        echo "<td>".$unClient['prenom']."</td>";
        echo "<td>".$unClient['adresse']."</td>";
        echo "<td>".$unClient['age']."</td>";
        echo "<td>".$unClient['email']."</td>";
        echo "<td>".$unClient['mdp']."</td>";
        echo "<td>".$unClient['role']."</td>";
        echo "<td>";
        echo "<a href='index.php?page=2&action=sup&idpersonne=".$unClient['idpersonne']."'> <img src='images/icon_delete.png'
        height='30'> </a>";
        echo "<a href='index.php?page=2&action=edit&idpersonne=".$unClient['idpersonne']."'> <img src='images/icon_edit.png'
        height='30'> </a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>