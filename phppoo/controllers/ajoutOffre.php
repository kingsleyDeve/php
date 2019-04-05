<?php

require("/../modeles/ajoutOffre.php");

session_start();
  
   if(isset($_POST['btnsauvegarder'])) 
 {

    $type_contrat = ($_POST['type_contrat']);
    $emploi = ($_POST['emploi']);
      $date= trim($_POST['dateoffre']);
       $date2 = date('Y-m-d', strtotime($date));

  if (empty($_POST['type_contrat']) || empty($_POST['emploi']) ) 
  {

      $erreur="Veuillez remplire tout les champs";
  }   
    else{

        

         addOffre($type_contrat, $emploi, $date2);
        

            $erreur="offre ajouté avec succès";
        }
  }



require("/../views/ajoutOffre.php");