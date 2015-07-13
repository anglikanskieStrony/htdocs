<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/database-manager.php");

class SessionManager
{
	private $databaseManager;
	public function __construct($databaseManager)
	{
		$this->databaseManager = $databaseManager;
	}
	public function logIn($login, $password)
	{
		$user = $this->databaseManager->getUserByLogin($login);
		if($user)
		{
			if($user->getPassword() == $password && $password !=null)
			{
				$_SESSION['user'] = serialize($user);
				return true;
			}
			
		}
		return false;
	}
	public function logOut()
	{
		if(!isset($_SESSION))
		{
			session_start();
		}
		session_destroy();
		header("Location: /");
	}
	
	
	public function authorise()
	{
		if(isset($_SESSION['user']))
		{
			$user = unserialize($_SESSION['user']);
			if($user->getIsAdmin())
			{
				return true;
			}
		}
		return false;
	}
}

?>