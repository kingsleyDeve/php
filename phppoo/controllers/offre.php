<?php
session_start();

require('/../modeles/offre.php');


              if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      deleteOffre($supprime);
  }

  if(isset($_POST['btnasc'])){

      $req = offreAsc();

  }

elseif(isset($_POST['btndesc'])){

 $req = offreDesc();
 }

else{
      $req = getOffre();
  }

        if(isset($_SESSION['partenaire_nom'])){
      

             require('/../views/tab/partenaire.php');

     
   }

   elseif (isset($_SESSION['nom'])) {
      
       
     require('/../views/tab/jeune.php');

     

        }

    elseif(isset($_SESSION['idadministrateur'])){

       require('/../views/tab/admin.php');
    }

    else{
      echo "erreur";
    }

    if (isset($_POST["formDeconnexion2"])) 
    {
      header("location: loginJeune.php");
      session_destroy();

      
      
          }

          if (isset($_POST["formDeconnexion"])) 
    {
      header("location: loginPartenaire.php");
      session_destroy();

      
      
          }

    
   

    require('/../views/offre.php');

