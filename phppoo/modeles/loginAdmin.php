<?php

require("connexion.php");

function connectAdmin($administrateur_siret, $administrateur_mdp)
{

  

$bdd= Connexion();

 $verification = $bdd->query("SELECT * FROM administrateur WHERE administrateur_siret= '$administrateur_siret' and administrateur_mdp= '$administrateur_mdp'");
         
    
        $data=$verification->fetch();


return $data;
    





}