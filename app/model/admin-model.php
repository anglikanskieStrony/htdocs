<?php

include_once($_SERVER['DOCUMENT_ROOT']."/app/model/base-model.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
class AdminModel extends BaseModel
{
	public function checkIfThereIsUser()
	{
		if($this->databaseManager->getUsersCount())
			return true;
		return false;
	}
	public function authorise()
	{
		if($this->sessionManager->authorise())
		{
			echo("zalogowano");
			return true;
		}
		else if(isset($_GET['login']) && isset($_GET['password']))
		{
			echo("logowanie");
			if(!$this->sessionManager->logIn($_GET['login'], $_GET['password']))
			{
				echo("logowanie nie powiod³o siê");
				$this->display("login-failed-admin");
				return false;
			}
		} 
		else
		{	
			echo("zaloguj");
			$this->display("login-admin");
			exit;
		}
		return false;
	}
	public function logOut()
	{
		$this->sessionManager->logOut();
	}
	
	//--------------LOAD
	public function loadIndex()
	{
		$this->pageData = $this->databaseManager->getSpecialById(1);
	}
	public function loadMenuCategories()
	{	
		$this->pageData = $this->databaseManager->getCategoryList();
	}
	public function loadMenuCategory()
	{
		$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
	}
	public function loadContact()
	{
		$this->pageData = $this->databaseManager->getSpecialById(2);
	}
	public function loadGallery()
	{
		
	}
	public function loadUser()
	{
		
	}
	//--------------ADD
	public function addMenuCategory()
	{
		$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
	}
	public function addUser()
	{
		$this->databaseManager->createUser(new User(null,$_POST['login'], $_POST['password'],false,false));
	}
	//--------------SAVE
	public function saveGallery()
	{
	
	}
	public function saveIndex()
	{
	}
	public function saveMenuCategory()
	{
		$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
	}
	public function saveContact()
	{
		$this->pageData = $this->databaseManager->getSpecialById(2);
	}
	//--------------DELETE
	public function deleteMenuCategory()
	{
		$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
	}
	public function deleteUser()
	{
		$this->pageData = $this->databaseManager->getSpecialById(2);
	}

	
}

?>