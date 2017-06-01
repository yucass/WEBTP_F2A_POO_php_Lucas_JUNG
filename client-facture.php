<?php
include_once ("serverConnect.php");
class client {
	// donnees membres
	private $_idClient;
	private $_nomClient;
	private $_prenomClient;
	private $_adresseClient;
	private $_cpClient;
	private $_villeClient;
	private static $_nbClient=0;
	public $_facture = array();
	private  $getfactureclient;

	
	private static function initClient($midClient,$mnomClient,$mprenomClient, $madresseClient, $mcpClient, $mvilleClient)
	{self::$_nbClient++;}
	
	
		public function __construct($midClient,$mnomClient,$mprenomClient, $madresseClient, $mcpClient, $mvilleClient){
		self::initClient($midClient,$mnomClient, $mprenomClient, $madresseClient, $mcpClient, $mvilleClient);
		$this->_idClient=$midClient;
		$this->_nomClient=$mnomClient;
		$this->_prenomClient=$mprenomClient;
		$this->_adresseClient=$madresseClient;
		$this->_cpClient=$mcpClient;
		$this->_villeClient=$mvilleClient;
		}


		public function __destruct() {}
	
		public function afficheClient(){
			echo '<br/>';
			echo $this->_idClient." ".$this->_nomClient." ".$this->_prenomClient." ".$this->_adresseClient." ".$this->_cpClient." ".$this->_villeClient."<br/>";
			foreach ($this->_facture as $values)
			{echo "Facture : ".$values."<br/>";}
			echo '<br/>';
			}
	


	
		//Mutateurs
		public function getIdClient(){
			return $this->_idClient;
		}
		public function getNomClient(){
			return $this->_nomClient;
		}
		public function getPrenomClient(){
			return $this->_prenomClient;
		}
		public function getAdresseClient(){
			return $this->_adresseClient;
		}
		public function getCpClient(){
			return $this->_cpClient;
		}
		public function getVilleClient(){
			return $this->_villeClient;
		}
		
		
		
		public function setIdClient($midClient){
			$this->_idClient=$midClient;
		}
		public function setNomClient($mnomClient){
			$this->_nomClient=$mnomClient;
		}
		public function setPrenomClient($mprenomClient){
			$this->_prenomClient=$mprenomClient;
		}
		public function setAdresseClient($madresseClient){
			$this->_adresseClientt=$madresseClient;
		}
		public function setCpClient($mcpClient){
			$this->_cpClientt=$mcpClient;
		}
		public function setVilleClient($mvilleClient){
			$this->_villeClient=$mvilleClient;
		}
	


			public function addfactureClient($getfactureclient){
			if(!in_array("$getfactureclient", $this->_facture))	{
				$this->_facture[]=$getfactureclient;
				
				}

			}
			
// …
public function hydrateClient(array $self)
{
  foreach ($self as $key => $value)

  {

    // On récupère le nom du setter correspondant à l'attribut.

    $method = $key;

        

    // Si le setter correspondant existe.

    if (method_exists($this, $method))

    {

      // On appelle le setter.

      $this->$method($value);  echo $method($value);
	}
  }


}

			
			
			
		public function addClient()

  		{
$bdd = new PDO ('mysql:host=localhost;dbname=test','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //array permet le debuggage
		$req = $bdd->prepare ('INSERT INTO client(NomClient, PrenomClient, email, pass, AdresseClient, VilleClient, Cp, salt) VALUES(:NomClient, :PrenomClient, :email, :pass, :AdresseClient, :VilleClient, :Cp, :salt)');
			/*			
				$salt = 'Ak8g!F3bV';

				$cryptpass = crypt($_POST['password'], $salt);
				$passwordToBeStored = password_hash($cryptpass, CRYPT_BLOWFISH);
*/
				$req->execute(array(
				'PrenomClient'=>$this->getPrenomClient(),
				'NomClient'=>$this->getNomClient(),
				'email'=>"test@test",
				'pass'=>"pass",
				'AdresseClient'=>$this->getAdresseClient(),
				'VilleClient'=>$this->getVilleClient(),
				'Cp'=>$this->getCpClient(),
				'salt'=>"1232"));	

  }




}


?>

