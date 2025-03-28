<h3> Insertion de l'info sur la vaccination</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">
<form method="post" class="form">
    <table>
        <tr>
            <td> Date de vaccination :</td>
            <td><input type="date" name="date_vaccin"></td>
        </tr>
        <tr>
            <td> Rapport de la vaccination :</td>
            <td><input type="text" name="rapport"></td>
        </tr>
        <tr>
            <td> ID du centre de vaccination :</td>
            <td>
                <select name="idcentre">
                    <?php
                    foreach($lesCentres as $centre) {
                        echo "<option value = '".$centre['idcentre']."'>";
                        echo $centre['nom'];
                        echo "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td> ID du vaccin :</td>
            <td><select name="idvaccin">
                    <?php
                    foreach($lesVaccins as $vaccin) {
                        echo "<option value = '".$vaccin['idvaccin']."'>";
                        echo $vaccin['laboratoire'];
                        echo "</option>";
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td> ID du client :</td>
            <td><select name="idpersonne">
                    <?php
                    foreach($lesPatients as $patient) {
                        echo "<option value = '".$patient['idpersonne']."'>";
                        echo $patient['email'];
                        echo "</option>";
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" name="Valider" value="Valider"></td>
        </tr>
    </table>
</form>

