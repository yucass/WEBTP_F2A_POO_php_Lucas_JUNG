<?php


//Hydratation des class
//creer class manager : sur le client. interagie avec la BDD : connexion, requete (insert update etc) 
include_once ("serverConnect.php");

include_once ("objets.php");
include_once ("client-facture.php");
include_once ("facture.php");
include_once ("produit.php");
include_once ("clientManager.php");
//include_once ("detail.php");




foreach ($mClient as $client)
			{
				echo "ID : ".$client->getIdClient()."<br/>";
				echo "Nom : ".$client->getNomClient()."<br/>";
				echo "Prenom : ".$client->getPrenomClient()."<br/>";
				echo "Adresse : ".$client->getAdresseClient()."<br/>";
				echo "Ville : ".$client->getCpClient()." ".$client->getVilleClient()."<br/><br/>";
				
				foreach ($client->_facture as $values)
				{
					echo "<br/>";
					echo "Facture : ".$mFacture[$values]->getIdFacture()."<br/>";
					echo "...date de paiement : ".$mFacture[$values]->getDateFacture()."<br/>";
					echo "...Mode de paiement : ".$mFacture[$values]->getModePaieFacture()."<br/";
					
					foreach($mFacture[$values]->_adddetailfacture as $produitfacture)
					{
						echo "<br/>";
						echo "..........Produit : ".$produitfacture." "."<br/>";
						echo "..........Detail produit : ".$mProduit[$produitfacture]->getDesProduit()."<br/>";
						
					}
				}
				echo '<br/><br/>';
			}


$client->addClient ($mClient[0]);
$client->hydrateClient($mClient);

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
</body>
</html>