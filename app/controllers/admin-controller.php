<?php

include_once($_SERVER['DOCUMENT_ROOT']."/app/controllers/base-controller.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/admin-model.php");
class AdminController extends BaseController
{
	public function __construct($page = "index")
	{
		$this->model = new AdminModel();
		if($this->model->checkIfThereIsUser())
		{
			//$this->model->logOut();
			if($this->model->authorise())
			{
				parent::__construct($page);
			}
			else{
				echo("banch");
				exit;
			}
		}
		else
		{
			parent::__construct("uzytkownik-admin");
		}
	}
	public function display($page)
	{
		switch($page)
		{
			case "index-admin":
				$this->model->loadIndex();
				break;
			case "menu-admin":
				$this->model->loadMenuCategories();
				break;
			case "kategoria-admin":
				$this->model->loadMenuCategory();
				break;
			case "kontakt-admin":
				$this->model->loadContact();
				break;
			case "galeria-admin":
				$this->model->loadGallery();
				break;
			case "uzytkownik-admin":
				$this->model->loadUser();
				break;
			default:
				$this->model->loadIndex();
		}
		parent::display($page);
	}
	public function save($page)
	{
			switch($page)
		{
			case "index":
				$this->model->saveIndex();
				break;
			case "menu":
				$this->model->saveMenuCategories();
				break;
			case "kategoria":
				$this->model->saveMenuCategory();
				break;
			case "kontakt":
				$this->model->saveContact();
				break;
			case "galeria":
				$this->model->saveGallery();
				break;
			case "user":
				$this->model->saveUser();
				break;
			default:
				echo('<script type="application/javascript"> 
						alert("Nieprawid³owe ¿¹danie.1");</script>');
		}
		parent::display($page);
	}
	public function add($page)
	{
		switch($page)
		{
			case "kategoria":
				$this->model->addMenuCategory();
				break;
			case "galeria":
				$this->model->addGallery();
				break;
			case "uzytkownik-admin":
				$this->model->addUser();
				break;
			default:
				echo('<script type="application/javascript">
						alert("Nieprawid³owe ¿¹danie.2");</script>');
		}
		parent::display($page);
	}
	public function delete($page)
	{
		switch($page)
		{
			case "kategoria":
				$this->model->deleteMenuCategory();
				break;
			case "galeria":
				$this->model->deleteGallery();
				break;
			case "user":
				$this->model->deleteUser();
				break;
			default:
				echo('<script type="application/javascript">
						alert("Nieprawid³owe ¿¹danie.3");</script>');
		}
		parent::display($page);
	}
}
$controller = new AdminController($page);

?>