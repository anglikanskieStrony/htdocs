<?php 

class User
{
	private $id;
	private $login;
	private $password;
	private $isAdmin;
	public function __construct($id,$login,$password = null, $isAdmin = false)
	{
		$this->id = $id;
		$this->login = $login;
		$this->isAdmin = $isAdmin;
		$this->password = sha1($password,true);
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
		$this->lgin = $login;
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
		return $this->isAdmin;
	}
	public function setPassword($password)
	{
		$this->isAdmin = sha1($password,true);
	}
	
}

?>