<h3> Insertion d'un vaccin</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">
<form method="post" class="form">
    <table>
        <tr>
            <td> Designation :</td>
            <td><input type="text" name="designation"
                       value="<?= ($LeVaccin == null)?'':$LeVaccin['designation']?>"></td>
        </tr>
        <tr>
            <td> Dosage :</td>
            <td><input type="text" name="dosage"
                       value="<?= ($LeVaccin == null)?'':$LeVaccin['dosage']?>"></td>
        </tr>
        <tr>
            <td> Rappel :</td>
            <td><input type="text   " name="rappel"
                       value="<?= ($LeVaccin == null)?'':$LeVaccin['rappel']?>"></td>
        </tr>
        <tr>
            <td> Contre indication :</td>
            <td><input type="text" name="c_indication"
                       value="<?= ($LeVaccin == null)?'':$LeVaccin['c_indication']?>"></td>
        </tr>
        <tr>
            <td> Nom du laboratoire :</td>
            <td><input type="text" name="laboratoire"
                       value="<?= ($LeVaccin == null)?'':$LeVaccin['laboratoire']?>"></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit"
                       <?= ($LeVaccin == null) ?
                       'name="Valider" value="Valider"' :
                       'name="Modifier" value="Modifier"' ?></td>
        </tr>
    </table>
</form>
