<?php

require("connexion.php");

function addPartenaire($partenaire_siret, $partenaire_mdp, $partenaire_nom)
{

  

$bdd= Connexion();


$inscription = $bdd->prepare('INSERT INTO partenaire(partenaire_siret, partenaire_mdp, partenaire_nom) VALUES(?, ?, ?)');
        $inscription->execute(array($partenaire_siret, $partenaire_mdp, $partenaire_nom));  


return $inscription;
    





}
