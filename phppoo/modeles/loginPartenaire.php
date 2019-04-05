<?php

require("connexion.php");

function connectPartenaire($partenaire_siret, $partenaire_mdp)
{

  

$bdd= Connexion();

 $verification = $bdd->query("SELECT * FROM partenaire WHERE partenaire_siret= '$partenaire_siret' and partenaire_mdp= '$partenaire_mdp'");
         
    
        $data=$verification->fetch();


return $data;
    





}






