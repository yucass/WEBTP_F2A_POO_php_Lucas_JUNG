<?php
//include ("client-facture.php");

class Facture {
	// donnees membres
	public $_idFacture;
	private $_dateFacture;
	private $_modePaieFacture;
	private static $_nbFacture=0;
	private $_Client;
	public $_adddetailfacture = array ();
	private  $getdetailfacture;

	
	private static function initFacture($midFacture,$mdateFacture,$mmodePaieFacture, $mclient)
	{self::$_nbFacture++;}
	
	
		public function __construct($midFacture,$mdateFacture,$mmodePaieFacture, $mclient){
			self::initFacture($midFacture,$mdateFacture,$mmodePaieFacture, $mclient);
			$this->_idFacture=$midFacture;
			$this->_dateFacture=$mdateFacture;
			$this->_modePaieFacture=$mmodePaieFacture;
			$this->_Client=$mclient;
			}
			
		public function __destruct() {}
	
		public function afficheFacture(){
			echo '<br/>';
			echo $this->_idFacture." ".$this->_dateFacture." ".$this->_modePaieFacture." ".$this->_Client;
			echo '<br/>';
			}
	
	
	
		//Mutateurs
		public function getIdFacture(){
			return $this->_idFacture;
		}
		public function getDateFacture(){
			return $this->_dateFacture;
		}
		public function getModePaieFacture(){
			return $this->_modePaieFacture;
		}
		public function getClient(){
			return $this->_Client;
		}
		public function getadddetailfacture(){
			return $this->_adddetailfacture;
		}
	
	
		
		
		public function setIdFacturet($midFacture){
			$this->_idFacture=$midFacture;
		}
		public function setDateFacture($mdateFacture){
			$this->_dateFacture=$mdateFacture;
		}
		public function setModePaieFacture($mmodePaieFacture){
			$this->_modePaieFacture=$mmodePaieFacture;
		}
			public function setClient($mclient){
			$this->_Client=$mclient;
		}
		
		
		
		
		

			public function adddetailfacture($getdetailfacture){
			if(!in_array($getdetailfacture, $this->_adddetailfacture))	{
				$this->_adddetailfacture[]=$getdetailfacture;
				
				}

			}

}




?>
