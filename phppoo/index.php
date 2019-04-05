<?php

session_start();
include('modeles/connexion.php');

if (isset($_POST['page']) && is_file('controllers/'.$_POST['page'].'.php')) {
	
	include('controllers/'.$_POST['page'].'.php');

}
else{
	header('location:controllers/accueil.php');
}


?>

