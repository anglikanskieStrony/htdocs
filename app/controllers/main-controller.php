<?php 
include($_SERVER['DOCUMENT_ROOT']."/app/controllers/base-controller.php");
class MainController extends BaseController
{
	public function __construct($page = "index")
	{
		$this->model = new MainModel();
		parent::__construct($page);
	}
	public function display($page)
	{
		switch($page)
		{
			case "index":
				$this->model->loadIndex();
				break;
			case "menu":
				$this->model->loadMenuCategories();
				break;
			case "kategoria":
				$this->model->loadMenuCategory();
				break;
			case "kontakt":
				$this->model->loadContact();
				break;
			case "galeria":
				$this->model->loadGallery();
				break;
			default:
				$this->model->loadIndex();			
		}
		parent::display($page);
	}
	public function save(){}
	public function addd(){}
	public function delete(){}
}
$controller = new MainController($page);
?>