<?php
function connexion()
{
    $server = "localhost";
    $bdd = "vaccination";
    $user = "root";
    $password = "root";
    $uneConnexion = mysqli_connect($server, $user, $password, $bdd);
    if ($uneConnexion != NULL) {
        return $uneConnexion;
    } else {
        echo "<br> Erreur de connexion BDD";
        return null;
    }
}

function deconnexion($uneConnexion)
{
    mysqli_close($uneConnexion);

}

function insertCentre($tab)
{
    $uneConnexion = connexion();
    $requete = "insert into centre values(null, '" . $tab['nom'] . "','" . $tab['adresse'] . "','" . $tab['typecentre'] . "','" . $tab['telephone'] . "'); ";
    mysqli_query(mysql: $uneConnexion, query: $requete);
    deconnexion($uneConnexion);
}

function insertVaccin($tab)
{
    $uneConnexion = connexion();
    $requete = "insert into vaccin values(null, '" . $tab['designation'] . "','" . $tab['dosage'] . "','" . $tab['rappel'] . "','" . $tab['c_indication'] . "','" . $tab['laboratoire'] . "'); ";
    mysqli_query(mysql: $uneConnexion, query: $requete);
    deconnexion($uneConnexion);
}

function insertClient($tab)
{
    $uneConnexion = connexion();
    $requete = "insert into personne values(null, '" . $tab['nom'] . "','" . $tab['prenom'] . "','" . $tab['adresse'] . "','" . $tab['age'] . "','" . $tab['email'] . "','" . $tab['mdp'] . "','" . $tab['role'] . "'); ";
    mysqli_query(mysql: $uneConnexion, query: $requete);
    deconnexion($uneConnexion);
}

function insertVaccination($tab)
{
    $uneConnexion = connexion();
    $requete = "insert into vaccination values(null, '" . $tab['date_vaccin'] . "','" . $tab['rapport'] . "','" . $tab['idcentre'] . "','" . $tab['idvaccin'] . "','" . $tab['idpersonne'] . "'); ";
    mysqli_query(mysql: $uneConnexion, query: $requete);
    deconnexion($uneConnexion);
}

function selectAllCentres()
{
    $requete = "select * from centre;";
    $uneConnexion = connexion();
    $lesCentres = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesCentres;
}


#Repliquer pour tous les pages
function deleteCentre($idcentre)
{
    $requete1 = "delete from centre where idcentre = " . $idcentre . ";";
    $requete2 = "delete from vaccination where idcentre = " . $idcentre . ";";
    $uneConnexion = connexion();
    mysqli_query($uneConnexion, $requete2);
    mysqli_query($uneConnexion, $requete1);
    deconnexion($uneConnexion);
}

#

function selectWhereCentre($idcentre)
{
    $uneConnexion = connexion();
    $requete = "select * from centre where idcentre=" . $idcentre . ";";
    $resultat = mysqli_query($uneConnexion, $requete);
    $unCentre = mysqli_fetch_assoc($resultat);
    deconnexion($uneConnexion);
    return $unCentre;
}

function updateCentre($tab)
{
    $uneConnexion = connexion();
    $requete = "update centre set nom ='" . $tab['nom'] . "', adresse='" . $tab['adresse'] . "', typecentre = '" . $tab['typecentre'] . "',
        telephone = '" . $tab['telephone'] . "' where idcentre = " . $tab['idcentre'] . ";";
    mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
}

function selectLikeCentres($filtre)
{
    $uneConnexion = connexion();
    $requete = "select * from centre where nom like '%" . $filtre . "%' or adresse like '%" . $filtre . "%' 
        or telephone like '%" . $filtre . "%' or typecentre like '%" . $filtre . "%';";
    $lesCentres = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesCentres;
}

function selectAllVaccins()
{
    $requete = "select * from vaccin;";
    $uneConnexion = connexion();
    $lesVaccins = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesVaccins;
}

function deleteVaccin($idvaccin)
{
    $requete1 = "delete from vaccin where idvaccin = " . $idvaccin . ";";
    $requete2 = "delete from vaccination where idvaccin = " . $idvaccin . ";";
    $uneConnexion = connexion();
    mysqli_query($uneConnexion, $requete2);
    mysqli_query($uneConnexion, $requete1);
    deconnexion($uneConnexion);
}


function selectWhereVaccin($idvaccin)
{
    $uneConnexion = connexion();
    $requete = "select * from vaccin where idvaccin=" . $idvaccin . ";";
    $resultat = mysqli_query($uneConnexion, $requete);
    $unVaccin = mysqli_fetch_assoc($resultat);
    deconnexion($uneConnexion);
    return $unVaccin;
}

function updateVaccin($tab)
{
    $uneConnexion = connexion();
    $requete = "update vaccin set laboratoire ='" . $tab['laboratoire'] . "', designation ='" . $tab['designation'] . "', dosage='" . $tab['dosage'] . "', rappel = '" . $tab['rappel'] . "',
        c_indication = '" . $tab['c_indication'] . "' where idvaccin =" . $tab['idvaccin'] . ";";
    mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
}

function selectLikeVaccins($filtre)
{
    $uneConnexion = connexion();
    $requete = "select * from vaccin where designation like '%" . $filtre . "%' or dosage like '%" . $filtre . "%' 
            or rappel like '%" . $filtre . "%' or c_indication like '%" . $filtre . "%' or dosage like '%" . $filtre . "%';";
    $lesVaccins = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesVaccins;
}


function selectAllClients()
{
    $requete = "select * from personne;";
    $uneConnexion = connexion();
    $lesClients = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesClients;
}

function selectWherePersonne($email, $mdp)
{
    $requete = "select * from personne where email='".$email."' and mdp='".$mdp."';";
    $uneConnexion = connexion();
    $resultat = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    $unePersonne = mysqli_fetch_assoc($resultat);
    return $unePersonne;
}

function deleteClient($idpersonne)
{
    $requete1 = "delete from personne where idpersonne = " . $idpersonne . ";";
    $requete2 = "delete from vaccination where idpersonne = " . $idpersonne . ";";
    $uneConnexion = connexion();
    mysqli_query($uneConnexion, $requete2);
    mysqli_query($uneConnexion, $requete1);
    deconnexion($uneConnexion);
}


function selectWhereClient($idpersonne)
{
    $uneConnexion = connexion();
    $requete = "select * from personne where idpersonne=" . $idpersonne . ";";
    $resultat = mysqli_query($uneConnexion, $requete);
    $leClient = mysqli_fetch_assoc($resultat);
    deconnexion($uneConnexion);
    return $leClient;
}

function updateClient($tab)
{
    $uneConnexion = connexion();
    $requete = "update personne set nom ='" . $tab['nom'] . "', prenom ='" . $tab['prenom'] . "', adresse='" . $tab['adresse'] . "', age = '" . $tab['age'] . "',
            email = '" . $tab['email'] . "', mdp ='" . $tab['mdp'] . "', role ='" . $tab['role'] . "' where idpersonne =" . $tab['idpersonne'] . ";";
    mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
}

function selectLikeClients($filtre)
{
    $uneConnexion = connexion();
    $requete = "select * from personne where nom like '%" . $filtre . "%' or prenom like '%" . $filtre . "%' 
                or adresse like '%" . $filtre . "%' or age like '%" . $filtre . "%' or email like '%" . $filtre . "%' or 
                role like '%" . $filtre . "%' or mdp like '%" . $filtre . "%';";
    $lesClients = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesClients;
}

function selectAllVaccinations()
{
    $requete = "select * from vaccination;";
    $uneConnexion = connexion();
    $lesVaccinations = mysqli_query($uneConnexion, $requete);
    deconnexion($uneConnexion);
    return $lesVaccinations;
}

?>