<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/database-manager.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/session-manager.php");

class BaseModel
{
	protected $dataBaseManager;
	protected $sessionManager;
	protected $pageData;
	public function __construct()
	{
		$this->dataBaseManager = new DataBaseManager();
		$this->sessionManager = new SessionManager();
	}
	public function display($page)
	{
		include($_SERVER['DOCUMENT_ROOT']."/app/views/".$page."-view.php");
		echo($page);
	}
	public function getPageData()
	{
		return $this->pageData;
	}
}

?>