<?php 
include($_SERVER['DOCUMENT_ROOT']."/app/controllers/base-controller.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/main-model.php");
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
	public function save($page){}
	public function add($page){}
	public function delete($page){}
}
$controller = new MainController($page);
?>