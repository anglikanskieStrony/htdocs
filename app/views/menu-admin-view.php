<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">
		<?php
		foreach($this->getPageData() as $category)
		{
			echo("<button type=\"button\" class=\"btn\" onClick=\"location.href='/menu/kategoria?categoryid=".$category->getId()."'\">".$category->getName() ."</button>");
		}
		
		?>
		
		
		
		
		
		</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>