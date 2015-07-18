<?php
class Model
{
	private $mock_categories;
	function __construct()
	{
		$this->mock_categories = [
			"kategoria1",
			"kategoria2",
			"kategoria3",
			"kategoria4",
			"kategoria5",
			"kategoria6",
			"kategoria7",
			"kategoria8",
			"kategoria9",
			"kategoria10",
			"kategoria11",
			"kategoria12",
			"kategoria13",
			"kategoria14",
			"kategoria15",
			"kategoria16",
		];
	}
	public function display($page)
	{
		include($_SERVER['DOCUMENT_ROOT']."/app/views/".$page."-view.php");
	}
}
?>