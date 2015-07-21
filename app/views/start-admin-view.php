<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
<form method="post" action="/admin/index/index.php?action=save">
	<input type="submit" class="btn_admin" value="zapisz">
	<div id="content" style="overflow-y:visible;">	
		<h1>Edycja strony startowej</h1>
    	<textarea id="elm1" name="content"><?php echo($this->getPageData()->getContent()); ?></textarea>
	</div>
</form>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>