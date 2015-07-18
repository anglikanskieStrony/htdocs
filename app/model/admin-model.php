<?php

include_once($_SERVER['DOCUMENT_ROOT']."/app/model/base-model.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/picture.php");
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
		if(isset($_GET["categoryid"]))
			$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
		else
			$this->pageData = new Article();
	}
	public function loadContact()
	{
		$this->pageData = $this->databaseManager->getSpecialById(2);
	}
	public function loadGallery()
	{
		$this->pageData = $this->databaseManager->getPictureList();
	}
	public function loadUser()
	{
		
	}


	
	//--------------ADD
	public function addUser()
	{
		$this->databaseManager->createUser(new User(null,$_POST['login'], $_POST['password'],false,true));
	}
	//--------------SAVE
	public function addPicture()
	{
		$this->pageData = $this->databaseManager->getPictureList();
		@set_time_limit(172800);
		if (@move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/static/gallery_images/" . basename($_FILES['filename']['name'])))
		{
			$this->databaseManager->createPicture($_FILES['filename']['name']);
			header("Location: /admin/galeria");
		}
		else return false;
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
	public function saveMenuCategory($category)
	{
		if($_GET["categoryid"]!="")
		{
			if($this->databaseManager->updateCategory($category))
			{
				$this->pageData = $this->databaseManager->getCategoryById($_GET["categoryid"]);
				return true;
			}
			return false;
		}
		else 
		{
			$this->databaseManager->createCategory($category);
			header("Location: /admin/menu");
		}
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
	public function deleteMenuCategory($id)
	{
		$this->pageData = $this->databaseManager->deleteCategory($id);
		header("Location: /admin/menu");
	}
	public function deleteUser()
	{
		$this->pageData = $this->databaseManager->getSpecialById(2);
	}
	public function deletePicture()
	{
		$filename = $this->databaseManager->getPictureById($_GET['id'])->getAddress();
		$this->databaseManager->deletePicture($_GET['id']);
		unlink($_SERVER["DOCUMENT_ROOT"]."/static/gallery_images/".$filename);
		header("Location: /admin/galeria");
	}
	
}

?>