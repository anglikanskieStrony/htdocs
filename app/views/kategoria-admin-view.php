<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
	
 <script type="text/javascript">

function areUSure()
{
	if(confirm("Czy na pewno chcesz usunąć kategorię: <?php echo($this->getPageData()->getName()); ?>?"))
	{
		location.href='/admin/menu/kategoria?categoryid=<?php echo($this->getPageData()->getId());?>&action=delete';
	}
}
 </script>
<button type="submit" class="btn_admin" style="left:55%;" onClick="areUSure();">Usuń</button>
 <form method="post" action="/admin/menu/kategoria/index.php?categoryid=<?php echo($this->getPageData()->getId()); ?>&amp;action=save">
	<input type="submit" class="btn_admin" value="zapisz">
	
	<div id="content">	
		 <h1>Edycja kategorii</h1>
		 <div>nazwa: <input type="text" name="name" id="name" value="<?php echo($this->getPageData()->getName()); ?>"></div><br>
    	<textarea id="elm1" name="content"><?php echo($this->getPageData()->getContent()); ?></textarea>
	</div>
</form>

    
	
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>