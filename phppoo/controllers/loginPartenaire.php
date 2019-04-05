<?php
session_start();
require('/../modeles/loginPartenaire.php');

		


if(isset($_POST['formConnexion']))
{
   $partenaire_siret=$_POST['partenaire_siret'];
   $partenaire_mdp=$_POST['partenaire_mdp'];

    
    $data = connectPartenaire($partenaire_siret, $partenaire_mdp);


          if(empty($_POST['partenaire_siret']) || empty($_POST['partenaire_mdp'])){

          $erreur="Veuillez remplire tout les champs";
         }
     
        else{  if($data['partenaire_siret'] == $partenaire_siret and $data['partenaire_mdp'] == $partenaire_mdp) {
          
           $_SESSION['idpartenaire']= $data['idpartenaire'];
            $_SESSION['partenaire_nom']= $data['partenaire_nom'];
         header('Location: offre.php');

         }else{

        $erreur= "Login ou mot de passe incorrect";
        
         }
  

         }
 
}




    require('/../views/loginPartenaire.php');




?>