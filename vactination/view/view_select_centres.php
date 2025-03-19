<h3 class=""> Liste des centres des vaccinations</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">
<form method="post" class="form">
    Filtrer les Centres par:
    <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>


<table border='1' class='aff'>
    <tr class="affi">
        <td> ID Centre</td>
        <td> Nom du centre</td>
        <td> Adresse</td>
        <td> Type du centre</td>
        <td> Telephone</td>
        <td> Operations</td>
    </tr>

    <?php
    foreach ($lesCentres as $unCentre) {
        echo "<tr class='affi'>";
        echo "<td>".$unCentre['idcentre']."</td>";
        echo "<td>".$unCentre['nom']."</td>";
        echo "<td>".$unCentre['adresse']."</td>";
        echo "<td>".$unCentre['typecentre']."</td>";
        echo "<td>".$unCentre['telephone']."</td>";
        echo "<td>";
        echo "<a href='index.php?page=3&action=sup&idcentre=".$unCentre['idcentre']."'> <img src='images/icon_delete.png'
        height='30'> </a>";
        echo "<a href='index.php?page=3&action=edit&idcentre=".$unCentre['idcentre']."'> <img src='images/icon_edit.png'
        height='30'> </a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
