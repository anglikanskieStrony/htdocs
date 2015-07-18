<?php
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/article.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/user.php");
include_once($_SERVER['DOCUMENT_ROOT']."/app/model/picture.php");
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
			return new User($row['id'],$row['login'],$row['password'],true,false);
		}
	}

	
	public function getUserByLogin($login){
		$query = "select * from users where login= '$login'";
	//	echo($query);
		
		
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
	
	//	echo($query);
		}
		if($result->num_rows == 1)
		{
		$row = $result->fetch_assoc();
		return new User($row['id'],$row['login'],$row['password'],true,false);
		}
		return null;
		
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
		$pictures = array();
		while($row = $result->fetch_assoc())
		{
			$pictures[] = new Picture($row['id'],$row['address']);
		}
		return $pictures;
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

	
	public function createCategory($category){
		$query = "insert into categories (name, content) values('".$category->getName()."', '".$category->getContent()."') ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function createPicture($fileName){
		$query = "insert into pictures (address) values('$fileName') ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê zapisaæ obrazka [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	public function updateUser($user){
		$query = "update users set login=$user->getLogin(), password=$user->getPassword() ";
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o siê wykonaæ zapytania [' . $this->databaseConnection->error . ']");</script>');
				}
	}
	
	public function updateSpecial($special){
		$query = "update special set name='".$special->getName()."', content='".$special->getContent()."' where id=".$special->getId();
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Zapis nie powiód³ siê [' . $this->databaseConnection->error . ']");</script>');
				
		}
				return true;
	}
	
	public function updateCategory($category){
		$query = "update categories set name='".$category->getName()."', content='".$category->getContent()."' where id=".$category->getId();
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Zapis nie powiód³ siê [' . $this->databaseConnection->error . ']");</script>');
				
		}
				return true;
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
		echo $query;
		if(!$result = $this->databaseConnection->query($query)){
			die('<script type="application/javascript"> alert("Nie uda³o usun¹æ kategorii[' . $this->databaseConnection->error . ']");</script>');
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