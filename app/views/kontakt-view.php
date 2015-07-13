<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content">
			
		
		 <h1>TinyMCE Getting Started Guide</h1>
    <form method="post">
       <textarea id="elm1" name="area"><?php echo($this->getPageData()->getContent()); ?></textarea>
    </form>
		<!--  <button type="button" class="btn" onClick="location.href='/?action=update'">zapisz</button>
		-->
			
		</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>