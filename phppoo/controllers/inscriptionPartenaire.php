<?php

require("/../modeles/inscriptionPartenaire.php");
 

if(isset($_POST['forminscription'])) {

    $partenaire_siret = ($_POST['partenaire_siret']);
    $partenaire_mdp = ($_POST['partenaire_mdp']);
    $partenaire_mdp2 = ($_POST['partenaire_mdp2']);
    $partenaire_nom = ($_POST['partenaire_nom']);

   if(empty($_POST['partenaire_siret'])  || empty($_POST['partenaire_mdp']) || empty($_POST['partenaire_mdp2']) || empty($_POST['partenaire_nom'])){

     $erreur= "Veuillez remplire tout les champs "; 
   }else{
      if($partenaire_mdp == $partenaire_mdp2){

addPartenaire($partenaire_siret, $partenaire_mdp, $partenaire_nom);

    die("inscription terminé <a href='loginPartenaire.php'>connectez vous ici</a>");

   }
   else{

    $erreur="les mot de passe ne correspondent pas";
   }
   }

 }
    
   

require("/../views/inscriptionPartenaire.php");