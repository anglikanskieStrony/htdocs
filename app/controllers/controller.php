<?php 
include($_SERVER['DOCUMENT_ROOT']."/app/model/model.php");
class Controller
{
	private $model;
	function __construct($page="index")
	{
		$this->model = new Model();
		//echo("<br>za³adowano kontroler<br>");
		if(isset($_GET["action"]))
			$this->takeAction($_GET["action"], $page);
		else
			$this->takeAction("display", $page);
	}
	public function takeAction($action, $page)
	{
		switch($action)
		{
			case "display":
			$this->display($page);
			break;
			case "save":
			$this->save($page);
			break;
			case "add":
			$this->add($page);
			break;
			case "delete":
			$this->delete($page);
			break;	
		}
	}
	public function display($page)
	{
		$this->model->display($page);
	}
	public function save($page)
	{
		//echo("zapisano element na stronie: ".$page);
	}
	public function add($page)
	{
		//echo("dodano element do strony: ".$page);
	}
	public function delete($page)
	{
		//echo("usuniêto element ze strony: ".$page);
	}
}
$controller = new Controller($page);
?>