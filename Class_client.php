<?php
class client
	{
	private $_ID;
	private $_Ville;
	private $_CP;
	private $_Tel;
	private $_Email;
	
	public function __construct($id, $ville, $cp, $tel, $email)
		{ $this->_ID=$id;
		$this->_Ville=$ville;
		$this->_CP=$cp;
		$this->_Tel=$tel;
		$this->_Email=$email;
		}
	public function __destruct()
		{ }



//Mutateurs (SET et GET)
// GET
	public function getID()
		{
			return $this->_ID;
		}
	public function getVILLE()
		{
			return $this->_Ville;
		}
	public function getCP()
		{
			return $this->_CP;
		}
	public function getTEL()
		{
			return $this->_Tel;
		}
	public function getEMAIL()
		{
			return $this->_Email;
		}
		
		
		
		//SET
	public function setID($id)
		{
			$this->_ID=$id;
		}
	public function setVILLE($ville)
		{
			$this->_y=$mY;
		}
	public function setCP($cp)
		{
			$this->_CP=$cp;
		}
	public function setTEL($tel)
		{
			$this->_TEL=$tel;
		}
	public function setEMAIL($email)
		{
			$this->_EMAIL=$email;
		}

function afficheclient ($id, $ville, $cp, $tel, $email)
{
	echo 'client '.$id.' Ville : '.$ville.' CP : '.$cp.'<br/>Tél : '.$tel.' Email : '.$email;
}
}

$Client = new client('01', 'Strasbourg', 67000, '0102030405', 'email@email.com');
$Client->afficheclient(01, 'Strasbourg', 67000, 0102030405, 'email@email.com');

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