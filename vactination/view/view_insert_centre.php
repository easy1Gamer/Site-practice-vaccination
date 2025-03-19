<h3> Insertion d'un centre</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">
<form method="post" class="form">
    <table>
        <tr>
            <td> Nom du centre :</td>
            <td><input type="text" name="nom"
                       value="<?= ($leCentre == null)?'':$leCentre['nom']?>"></td>
        </tr>
        <tr>
            <td> Adresse du centre :</td>
            <td><input type="text" name="adresse"
                       value="<?= ($leCentre == null)?'':$leCentre['adresse']?>"></td>
        </tr>
        <tr>
            <td> Type du centre :</td>
            <td><input type="text" name="typecentre"
                       value="<?= ($leCentre == null)?'':$leCentre['typecentre']?>"></td>
        </tr>
        <tr>
            <td> Telephone du centre :</td>
            <td><input type="text" name="telephone"
                       value="<?= ($leCentre == null)?'':$leCentre['telephone']?>"></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit"
                       <?=  ($leCentre==null)  ?
                       'name="Valider" value="Valider"' :
                       'name="Modifier" value="Modifier"' ?></td>
        </tr>
    </table>
</form>
