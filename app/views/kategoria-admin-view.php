<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content">
				<?php echo($kurwamac = $this->getPageData()->getContent()); ?> 
				
		</div>	
    
	
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>