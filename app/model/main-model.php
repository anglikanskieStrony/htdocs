<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/base-model.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");

class MainModel extends BaseModel
{
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
}

?>