<?php


class ClientManager

{

  private $bdd; // Instance de PDO.


  public function __construct($db)

  {

    $this->setDb($db);

  }




  public function delete(Personnage $perso)

  {

    // Exécute une requête de type DELETE.

  }


  public function get($id)

  {

    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.

  }


  public function getList()

  {

    // Retourne la liste de tous les personnages.

  }


  public function update(Personnage $perso)

  {

    // Prépare une requête de type UPDATE.

    // Assignation des valeurs à la requête.

    // Exécution de la requête.

  }


  public function setDb(PDO $db)

  {

    $this->_db = $db;

  }

}



?>