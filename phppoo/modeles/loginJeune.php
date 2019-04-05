<?php

require("connexion.php");

function connectJeune($login, $jeune_mdp)
{

  

$bdd= Connexion();

  $verification = $bdd->query("SELECT * FROM jeune WHERE login= '$login' and jeune_mdp= '$jeune_mdp'");
            
      
            $data=$verification->fetch();


return $data;
    





}


