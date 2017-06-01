<?php 
include_once ("client-facture.php");
include_once ("facture.php");
include_once ("produit.php");
//include_once ("detail.php");




//---------------------------------- CLIENT
$mClient = array();
$reponse = $bdd->query('SELECT * FROM client');
while ($donnees = $reponse->fetch())
									{
										$mClient[] = new client ($donnees['NumClient'], $donnees['NomClient'], $donnees['PrenomClient'], $donnees['AdresseClient'], $donnees['Cp'], $donnees['VilleClient']);
									}
									
									
$mClient []= new Client(001, "DUBOIS", "CHARLES", "8 rue noire", "67000", "Srasbourg");

$mClient[] = new Client(002, "DUBOIS", "CHARLES", "8 rue noire", "67000", "Srasbourg");

$mClient[] = new client(003, "MEYER", "PATRICK", "Rue des fleurs", "68200", "Mulhouse");


//---------------------------------- FACTURE PAR CLIENT
$mClient[0]->addfactureClient(0);
$mClient[0]->addfactureClient(1);
$mClient[1]->addfactureClient(2);
$mClient[2]->addfactureClient(3);


//---------------------------------- FACTURE



$mFacture = array();
$mFacture[0]= new Facture(001, "01/01/2000", "espece", "DUPONT");
$mFacture[1]= new Facture(002, "08/02/2001", "virement", "poirson");
$mFacture[2]= new Facture(003, "08/02/2001", "virement", "MEYER");
$mFacture[3]= new Facture(004, "08/02/2010", "CB", "JUNG");

$mFacture[0]->adddetailfacture(0);
$mFacture[0]->adddetailfacture(1);
$mFacture[1]->adddetailfacture(0);
$mFacture[2]->adddetailfacture(1);
$mFacture[3]->adddetailfacture(1);
//$mClient[0]->_facture[0]->detailfacture(0);


//---------------------------------- PRODUITS
$mProduit[] = array();

$mProduit[0]= new Produit(001, "Joli PC 4 coeur", 500.00, 10);
$mProduit[1]= new Produit(002, "Lampe à Huile", 423.22, 10);


//---------------------------------- DETAIL PRODUIT PAR FACTURE
/*
$mQuantite[]= array ();
$mQuantite [0] = new Quantite(50);
$mQuantite [1] = new Quantite(25);
*/
?>