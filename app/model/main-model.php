<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/base-model.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");

class MainModel extends BaseModel
{
	public function loadIndex()
	{
		$this->pageData = new Article();
	}
	public function loadMenuCategories()
	{
		$this->pageData = array();
		for($i=0; $i<20; $i++ )
		{
			$this->pageData[$i] = new Article();
		}
	}
	public function loadMenuCategory()
	{
		$this->pageData = new Article();
	}
	public function loadContact()
	{
		$this->pageData = new Article();
	}
	public function loadGallery()
	{
		
	}
}

?>