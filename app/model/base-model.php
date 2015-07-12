<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/database-manager.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/session-manager.php");

class BaseModel
{
	protected $databaseManager;
	protected $sessionManager;
	protected $pageData;
	public function __construct()
	{
		$this->databaseManager = new DataBaseManager();
		$this->sessionManager = new SessionManager($this->databaseManager);
	}
	public function display($page)
	{
		include($_SERVER['DOCUMENT_ROOT']."/app/views/".$page."-view.php");
	}
	public function getPageData()
	{
		return $this->pageData;
	}
	public function logOut()
	{
		$this->sessionManager->logOut();
	}
}

?>