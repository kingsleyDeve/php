<?php 
session_start();

require("../modeles/loginJeune.php");

if(isset($_POST['formConnexion']))
{
   $login=$_POST['login'];
   $jeune_mdp=$_POST['jeune_mdp'];

   
  
            $data= connectJeune($login, $jeune_mdp);

        if(empty($_POST['login']) || empty($_POST['jeune_mdp'])){

          $erreur="Veuillez remplire tout les champs";
         }
     
        else{  if($data['login'] == $login and $data['jeune_mdp'] == $jeune_mdp) {
          
           $_SESSION['nom']= $data['nom'];
            $_SESSION['prenom']= $data['prenom'];
         header('Location: offre.php');

         }else{

        $erreur= "Login ou mot de passe incorrect";
        
         }
}
}

require("../views/loginJeune.php");