<?php
//CONNEXION A LA BASE
try 
{
	$bdd = new PDO ('mysql:host=localhost;dbname=test','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //array permet le debuggage
}
catch (Exception $e)
{die('erreur : '.$e->getMessage());
}

?>