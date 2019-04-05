<?php

function connexion()
{
		try
		{
			$bdd= new PDO('mysql:host=localhost;dbname=ppe','root','');
		} 
		catch (PDOException $e)
	 	{
			 $e->getMessage()."<br>";
			die();
		}

		return $bdd;
}
?>