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
			return true;
		}
		else if(isset($_POST['login']) && isset($_POST['password']))
		{
			if(!$this->sessionManager->logIn($_POST['login'], "admin1"))
			{
				$this->display("login-failed-admin");
				return false;
			}
			return true;
		} 
		else
		{	
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
		$this->databaseManager->createUser(new User(null,$_POST['login'], $_POST['password'],false,true));
	}
	//--------------SAVE
	public function saveGallery()
	{
	
	}
	public function saveIndex($index)
	{
		if($this->databaseManager->updateSpecial($index))
		{
			$this->pageData = $this->databaseManager->getSpecialById(1);
			return true;
		}
		return false;
	}
	public function saveMenuCategory()
	{
		$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
	}
	
	public function saveContact($contact)
	{
		//echo("nast�pi�a kurwa pr�ba zapisu");
		if($this->databaseManager->updateSpecial($contact))
		{
			$this->pageData = $this->databaseManager->getSpecialById(2);
			return true;
		}
		return false;
	}
	
	#public function saveContact()
	#{
	#	$this->pageData = $this->databaseManager->updateSpecial(2);
	#}
	
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