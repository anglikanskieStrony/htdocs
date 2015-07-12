<?php 

class User
{
	private $id;
	private $login;
	private $password;
	private $isAdmin;
	public function __construct($id,$login,$password = "admin1", $isAdmin = true, $hashPass = true)
	{
		$this->id = $id;
		$this->login = $login;
		$this->isAdmin = $isAdmin;
	//	if($hashPass)
	//		$this->password = sha1($password,true);
	//	else 
			$this->password = $password;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function setLogin($login)
	{
		$this->login = $login;
	}
	public function getIsAdmin()
	{
		return $this->isAdmin;
	}
	public function setIsAdmin($isAdmin)
	{
		$this->isAdmin = $isAdmin;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = sha1($password,true);
	}
	
}

?>