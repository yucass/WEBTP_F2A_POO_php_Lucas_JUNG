<?php

class Quantite {
	// donnees membres
	private $_Quantite;
	private static $_nbQuantite=0;
	private $_pproduitdetail = array ();

	
	private static function initQuantite($mquantite)
	{self::$_nbQuantite++;}
	
	
		public function __construct($mquantite){
		self::initQuantite($mquantite);
		$this->_Quantite=$mquantite;


	}
	public function __destruct() {}
	
	public function afficheQuantite(){
		echo '<br/>';
		echo $this->_Quantite;
		echo '<br/>';
	}
	
	
	
	//Mutateurs
	public function getQuantite(){
		return $this->_Quantite;
	}

	public function setQuantite($mquantite){
		$this->_Quantite=$mquantite;
	}

}


?>
