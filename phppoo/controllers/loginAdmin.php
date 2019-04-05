<?php
session_start();
require('/../modeles/loginAdmin.php');

		


if(isset($_POST['formConnexion']))
{
   $administrateur_siret=$_POST['administrateur_siret'];
   $administrateur_mdp=$_POST['administrateur_mdp'];

    
    $data = connectAdmin($administrateur_siret, $administrateur_mdp);


          if(empty($_POST['administrateur_siret']) || empty($_POST['administrateur_mdp'])){

          $erreur="Veuillez remplire tout les champs";
         }
     
        else{  if($data['administrateur_siret'] == $administrateur_siret and $data['administrateur_mdp'] == $administrateur_mdp) {
          
           $_SESSION['idadministrateur']= $data['idadministrateur'];
            $_SESSION['administrateur_siret']= $data['administrateur_siret'];
         header('Location: offre.php');

         }else{

        $erreur= "Login ou mot de passe incorrect";
        
         }
  

         }
 
}




    require('/../views/loginAdmin.php');




?>