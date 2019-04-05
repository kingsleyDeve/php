<?php

require("/../modeles/modifierOffre.php");

$id=$_GET['id'];

  $tab= getOffreId($id);

    if(isset($_POST['type_contrat']) && isset($_POST['emploi']) && isset($_POST['dateoffre'])) {

    $type_contrat = $_POST['type_contrat'];
    $emploi = $_POST['emploi'];
        $date = $_POST['dateoffre'];

        updateOffre($type_contrat, $emploi, $date, $id);
  
  header('Location: offre.php');
  }

  require("/../views/modifierOffre.php");