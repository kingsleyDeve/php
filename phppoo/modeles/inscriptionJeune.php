<?php

require("connexion.php");

function addJeune($login, $jeune_mdp, $nom, $prenom)
{

  

$bdd= Connexion();

 $inscription = $bdd->prepare('INSERT INTO jeune(login, jeune_mdp, nom, prenom) VALUES(?, ?, ?, ?)');
        $inscription->execute(array($login, $jeune_mdp, $nom, $prenom)); 


return $inscription;
    

}






