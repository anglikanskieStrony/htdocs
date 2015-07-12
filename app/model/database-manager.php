<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");
include_once($_SERVER['DOCUMENT_ROOT']."/conf/db.conf.php");

class databaseManager{
	
	private $databaseName;
	private $databaseConnection;
	private $server;
	private $login;
	private $password;
	
	public function __construct(){
		global $databaseConfig;
		$this->server = $databaseConfig["server"];
		$this->login = $databaseConfig["login"];
		$this->password = $databaseConfig["password"];
		$this->databaseName = $databaseConfig["databaseName"];
		$this->connect();
	}
	
	public function connect(){	
	$this->databaseConnection = new mysqli($this->server,$this->login,$this->password,$this->databaseName);
	if($this->databaseConnection->connect_errno > 0){
		die(' <script type="application/javascript"> alert("Nie uda³o siê skomunikowaæ z Baz¹ Danych. [' . $this->databaseConnection->connect_error . ']");</script>');
		}

	}
	
	public function getUsersCount(){
		$query = "select * from users";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
		}		
			return $result->num_rows;
	}
	
	public function getUserById($id){
		$query = "select * from users where id= '$id'";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
			$row = $result->fetch_assoc();
			return new User($row['id'],$row['login'],$row['password'],true);
		}
	}

	
	public function getUserByLogin($login){
		$query = "select * from users where login= '$login'";
	//	echo($query);
		
		
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
	
	//	echo($query);
		}
		$row = $result->fetch_assoc();
		return new User($row['id'],$row['login'],$row['password'],true,false);
		
	}
	
	public function getCategoryList(){
		$query = "select * from categories";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
		}
		$categories = array();
		while($row = $result->fetch_assoc())
		{
			$categories[] = new Article($row['id'],$row['name'],$row['content']);
		}
		return $categories;
		
	}
	public function getCategoryById($id){
		$query = "select * from categories where id = '$id'";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
		}
		if($row = $result->fetch_assoc())
			return new Article($row['id'],$row['name'],$row['content']);
			
		else 
			return new Article();
	}
	
	public function getSpecialById($id){
		$query = "select * from special where id = '$id'";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
		if($row = $result->fetch_assoc())
			return new Article($row['id'],$row['name'],$row['content']);
		else return 
			new Article();
	}
	
	public function getPictureList(){
		$query = "select * from pictures";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function getPictureById($id){
		$query = "select * from pictures where id = '$id'";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	public function createUser($user){
		$query = "insert into users (login, password) values('".$user->getLogin()."','".$user->getPassword()."') ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function createSpecial($special){
		$query = "insert into specials values(".$special->getName().", ".$special->getContent().") ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function createCategory($category){
		$query = "insert into categories values($category->getName(), $category->getContent()) ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function createPicture($picture){
		$query = "insert into pictures values($category->getAddress()) ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	public function updateUser($user){
		$query = "update users set login=$user->getLogin(), password=$user->getPassword() ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function updateSpecial($special){
		$query = "update specials set login=$special->getName(), password=$special->getContent() ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function updateCategory($category){
		$query = "update specials set login=$category->getName(), password=$category->getContent() ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function updatePicture($picture){
		$query = "update specials set login=$category->getPassword()";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function deleteUser($id){
		$query = "delete from users where id=$id";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function deleteSpecial($id){
		$query = "delete from specials where id=$id";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function deleteCategory($id){
		$query = "delete from categories where id=$id";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function deletePicture($id){
		$query = "delete from pictures where id=$id";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
}

?>