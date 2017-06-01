<?php

class Produit {
	// donnees membres
	private $_idProduit;
	private $_DesProduit;
	private $_PUHT;
	private $_Quantite;
	private static $_nbProduit=0;

	
	private static function initProduit($midProduit,$mdesProduit,$mPUHT,$mquantite)
	{self::$_nbProduit++;}
	
	
		public function __construct($midProduit,$mdesProduit,$mPUHT, $mquantite){
		self::initProduit($midProduit,$mdesProduit,$mPUHT, $mquantite);
		$this->_idProduit=$midProduit;
		$this->_DesProduit=$mdesProduit;
		$this->_PUHT=$mPUHT;
		$this->_Quantite=$mquantite;

	}
	public function __destruct() {}
	
	public function afficheProduit(){
		echo '<br/>';
		echo $this->_idProduit." ".$this->_DesProduit." ".$this->_PUHT;
		echo '<br/>';
	}
	
	
	
	//Mutateurs
	public function getIdProduit(){
		return $this->_idProduit;
	}
	public function getDesProduit(){
		return $this->_DesProduit;
	}
	public function getPUHTProduit(){
		return $this->_PUHT;
	}
	public function getQuantite(){
		return $this->_Quantite;
	}
	
	
	public function setIdProduit($midProduit){
		$this->_idProduit=$midProduit;
	}
	public function setDesProduit($mdesProduit){
		$this->_DesProduit=$mdesProduit;
	}
	public function setPUHTProduit($mPUHT){
		$this->_PUHT=$mPUHT;
	}
	public function setQuantite($mquantite){
		$this->_Quantite=$mquantite;
	}


}


?>
