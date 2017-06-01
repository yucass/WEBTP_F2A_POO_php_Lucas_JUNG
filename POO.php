<?php
class Point{
	//Données Membres
	private $_x;
	private $_y;
	private $_z;
	private $_taillePoint;
	private static $_nbPoint=0;
	
	
	// CONSTANTES
	const POINTPETIT = 5;
	const POINTMOYEN = 10;
	const POINTGRAND = 20;
	

	
		private static function initPoint($mX,$mY,$mZ){
		//private function initPoint($mX,$mY,$mZ){
		//$this->_x=$mX;
		//$this->_y=$mY;
		//$this->_z=$mZ;
		
		self::$_nbPoint++;
		
	}
	public function __construct($mX,$mY,$mZ, $mTaille){
		echo "Contructeur <br/>";
		//$this->initPoint($mX,$mY,$mZ);
		self::initPoint($mX,$mY,$mZ);
		$this->_x=$mX;
		$this->_y=$mY;
		$this->_z=$mZ;
		$this->_taillePoint=$mTaille;
	}
	public function __destruct() {
		echo '<br/>';
        echo 'Destruction de ' . $this->_x.'<br/>';
        echo 'Destruction de '  .$this->_y.'<br/>';
        echo 'Destruction de ' . $this->_z.'<br/>';
		echo 'Destruction de '.self::$_nbPoint.'<br/>';
    }
	
	public function affichePoint(){
		echo '<br/>';
		echo $this->_x;
		echo $this->_y;
		echo $this->_z;
		echo '<br/>';
		echo $this->_taillePoint;
		echo '<br/>';
	}
	
	
	
	
	
	//Mutateurs
	public function getPointX(){
		return $this->_x;
	}
	public function getPointY(){
		return $this->_y;
	}
	public function getPointZ(){
		return $this->_z;
	}
	public function setPointX($mX){
		$this->_x=$mX;
	}
	public function setPointY($mY){
		$this->_y=$mY;
	}
	public function setPointZ($mZ){
		$this->_z=$mZ;
	}
	public function getnbPoint(){
		return self::$_nbPoint;
	}
	

	
	public function setTaillePoint($mTaille){
		
			$tabtemps = array(self::POINTPETIT, self::POINTMOYEN, self::POINTGRAND);
		
		if(in_array($mTaille, $tabtemps))
		{$this->_taillePoint=$mTaille;}
	}
}
?>

<?php
	//Main
	
	// le :: est un operateur de porté
$mPt= new Point(2.8,8.9,6.3,POINT::POINTGRAND);
$mPt->affichePoint();
$mPt->setTaillePoint(POINT::POINTPETIT);
$mPt->affichePoint();

	
?>