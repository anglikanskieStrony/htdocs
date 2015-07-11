<?php

class Article
{
	private $id;
	private $name;
	private $content;
	public function __construct($id="default id",$name="default name", $content = "defaultContent")
	{
		$this->id = $id;
		$this->name = $name;
		$this->content = $content;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->name = $id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function setContent($content)
	{
		$this->content = $content;
	}
}

?>