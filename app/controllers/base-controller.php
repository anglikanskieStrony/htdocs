<?php

include($_SERVER['DOCUMENT_ROOT']."/app/model/main-model.php");

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
				$this->save();
				break;
			case "add":
				$this->add();
				break;
			case "delete":
				$this->delete();
				break;
		}
	}
	public function display($page)
	{
		$this->model->display($page);
	}
	public abstract  function save();
	public abstract function addd();
	public abstract function delete();
}

?>