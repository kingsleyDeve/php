<?php

require('/../modeles/inscriptionJeune.php');

		session_start();


if(isset($_POST['forminscription'])) {

    $login = ($_POST['login']);
    $jeune_mdp = ($_POST['jeune_mdp']);
    $jeune_mdp2 = ($_POST['jeune_mdp2']);
     $nom  = ($_POST['nom']);
      $prenom = ($_POST['prenom']);

   if(empty($_POST['login'])  || empty($_POST['jeune_mdp']) || empty($_POST['jeune_mdp2']) || empty($_POST['nom']) || empty($_POST['prenom'])){

 $erreur= "Veuillez remplire tout les champs ";   

  } else{
    
        if($jeune_mdp == $jeune_mdp2){

          addJeune($login, $jeune_mdp, $nom, $prenom);

        die("inscription terminé <a href='loginJeune.php'>connectez vous ici</a>");
        }
        else{

    $erreur="les mot de passe ne correspondent pas";
   }
}
  


   

}

    require('/../views/inscriptionJeune.php');



?>