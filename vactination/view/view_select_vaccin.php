<h3 class="sous"> Liste des vaccins</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">

<form method="post" class="form">
    Filtrer les Vaccins par:
    <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>

<table border='1' class="aff">
    <tr class="affi">
        <td> ID Vaccin</td>
        <td> Designation</td>
        <td> Dosage</td>
        <td> Rappel</td>
        <td> Contre-indication</td>
        <td> Laboratoire</td>
        <td> Operations</td>
    </tr>

    <?php
    foreach ($lesVaccins as $unVaccin) {
        echo "<tr class='affi'>";
        echo "<td>".$unVaccin['idvaccin']."</td>";
        echo "<td>".$unVaccin['designation']."</td>";
        echo "<td>".$unVaccin['dosage']."</td>";
        echo "<td>".$unVaccin['rappel']."</td>";
        echo "<td>".$unVaccin['c_indication']."</td>";
        echo "<td>".$unVaccin['laboratoire']."</td>";
        echo "<td>";
        echo "<a href='index.php?page=4&action=sup&idvaccin=".$unVaccin['idvaccin']."'> <img src='images/icon_delete.png'
        height='30'> </a>";
        echo "<a href='index.php?page=4&action=edit&idvaccin=".$unVaccin['idvaccin']."'> <img src='images/icon_edit.png'
        height='30'> </a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>