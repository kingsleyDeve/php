<?php 

require("connexion.php");

function updateOffre($type_contrat, $emploi, $date, $id)
{
    $bdd= connexion();

		$update = $bdd->prepare("UPDATE offre SET type_contrat=:type_contrat, emploi=:emploi, dateoffre=:dateoffre where idoffre=:id");
      
       $update->execute([':type_contrat'=> $type_contrat, ':emploi'=> $emploi, ':dateoffre'=> $date, ':id'=>$id,]);        


        return $update;


}


function getOffreId($id)
{

	$bdd= connexion();
	$getId = $bdd->prepare("SELECT * FROM offre where idoffre=:id");
        $getId->execute([':id' => $id]);

        $tab = $getId->fetch(PDO::FETCH_OBJ);

        return $tab;

}