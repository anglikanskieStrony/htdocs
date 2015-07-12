<?php


abstract class BaseController
{
	protected $model;
	public function __construct($page="index")
	{
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
			case "logout":
				$this->logOut();
		}
	}
	public function display($page)
	{
		$this->model->display($page);
	}
	public function logOut()
	{
		$this->model->logOut();
	}
	public abstract  function save($page);
	public abstract function add($page);
	public abstract function delete($page);
}

?>