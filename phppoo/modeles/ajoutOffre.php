<?php

require("connexion.php");


function addOffre($type_contrat, $emploi, $date2)
{


				$bdd= connexion();
           		$addOffre = $bdd->prepare('INSERT INTO offre(type_contrat, emploi, dateoffre)  VALUES(:type_contrat, :emploi, :dateoffre)');
      		  	$addOffre->execute([':type_contrat'=>$type_contrat, ':emploi'=>$emploi, ':dateoffre'=>$date2]);

        
      	
  

  		return $addOffre;
}
