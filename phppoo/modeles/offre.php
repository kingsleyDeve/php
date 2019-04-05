<?php 

require("connexion.php");

function getOffre()
{
    $bdd= connexion();
    $req = $bdd->query('SELECT * FROM offre');
        return $req;


}


function deleteOffre($supprime)
{
	$bdd= connexion();
	$delete = $bdd->prepare('DELETE FROM offre WHERE offre.idoffre = ?');
    $delete->execute(array($supprime));

    	return $delete;

}


function offreAsc()
{
	$bdd= connexion();
	$req = $bdd->query('SELECT * FROM offre  ORDER BY offre.dateoffre ASC');

    	return $req;

}

function offreDesc()
{
	$bdd= connexion();
	$req = $bdd->query('SELECT * FROM offre  ORDER BY offre.dateoffre DESC');

    	return $req;

}



