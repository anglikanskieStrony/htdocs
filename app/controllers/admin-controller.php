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
			case "start-admin":
				$this->model->saveIndex(new Article(1,"kontakt",$_POST["content"]));
				break;
			case "menu-admin":
				$this->model->saveMenuCategories();
				break;
			case "kategoria-admin":
				$this->model->saveMenuCategory(new Article($_GET["categoryid"],$_POST["name"],$_POST["content"]));
				break;
			case "kontakt-admin":
				$this->model->saveContact(new Article(2,"kontakt",$_POST["content"]));
				break;
			case "galeria-admin":
				$this->model->saveGallery();
				break;
			case "uzytkownik-admin":
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

			case "galeria-admin":
				$this->model->addPicture();
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
			case "kategoria-admin":
				$this->model->deleteMenuCategory($_GET["categoryid"]);
				break;
			case "galeria-admin":
				$this->model->deleteGallery();
				break;
			case "user-admin":
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