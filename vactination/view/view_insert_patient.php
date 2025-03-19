<h3> Insertion des données d'un client</h3>
<link rel="stylesheet" type="text/css" href="css/main.css">
<form method="post" class="form">
    <table>
        <tr>
            <td> Nom du client :</td>
            <td><input type="text" name="nom"
                       value="<?= ($leClient == null)?'':$leClient['nom']?>"></td>
        </tr>
        <tr>
            <td> Prenom du client :</td>
            <td><input type="text" name="prenom"
                       value="<?= ($leClient == null)?'':$leClient['prenom']?>"></td>
        </tr>
        <tr>
            <td> Adresse du client :</td>
            <td><input type="text" name="adresse"
                       value="<?= ($leClient == null)?'':$leClient['adresse']?>"></td>
        </tr>
        <tr>
            <td> Age du client :</td>
            <td><input type="number" name="age"
                       value="<?= ($leClient == null)?'':$leClient['age']?>"></td>
        </tr>
        <tr>
            <td> Adresse email du client:</td>
            <td><input type="text" name="email"
                       value="<?= ($leClient == null)?'':$leClient['email']?>"></td>
        </tr>
        <tr>
            <td> MDP du client :</td>
            <td><input type="text" name="mdp"
                       value="<?= ($leClient == null)?'':$leClient['mdp']?>"></td>
        </tr>
        <tr>
            <td> Role du client :</td>
            <td><input type="text" name="role"
                       value="<?= ($leClient == null)?'':$leClient['role']?>"></td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit"
                    <?= ($leClient == null) ?
                    'name="Valider" value="Valider"' :
                    'name="Modifier" value="Modifier"' ?> ></td>
        </tr>
    </table>
</form>

