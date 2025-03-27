<h3 class="sous"> Liste des vaccinations effectuees</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">

<table border='1' class="aff">
    <tr class="affi">
        <td> ID Vaccination</td>
        <td> Date de la vaccination</td>
        <td> Rapport</td>
        <td> ID Centre</td>
        <td> ID Vaccin</td>
        <td> ID Patient</td>
        <td> Operations</td>
    </tr>

        <?php
        foreach ($lesVaccinations as $uneVaccination) {
            echo "<tr class='affi'>";
            echo "<td>".$uneVaccination['idvaccination']."</td>";
            echo "<td>".$uneVaccination['date_vaccin']."</td>";
            echo "<td>".$uneVaccination['rapport']."</td>";
            echo "<td>".$uneVaccination['idcentre']."</td>";
            echo "<td>".$uneVaccination['idvaccin']."</td>";
            echo "<td>".$uneVaccination['idpersonne']."</td>";
            echo "<td>";
            echo "<a href='index.php?page=4&action=sup&idcentre=".$uneVaccination['idvaccination']."'> <img src='images/icon_delete.png'
            height='30'> </a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
</table>
