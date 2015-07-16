<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
	
 <script type="text/javascript">

function areUSure()
{
	if(confirm("Czy na pewno chcesz usunąc kategorię: <?php echo($this->getPageData()->getName()); ?>?"))
	{
		location.href='/admin/menu/kategoria?categoryid=<?php echo($this->getPageData()->getId());?>&action=delete';
	}
}

 </script>
		<div id="content">

		 <h1>Edycja kategorii</h1>
    <form method="post" action="/admin/menu/kategoria/index.php?categoryid=<?php echo($this->getPageData()->getId()); ?>&amp;action=save">
    <div>nazwa: <input type="text" name="name" id="name" value="<?php echo($this->getPageData()->getName()); ?>"></div><br>
       <textarea id="elm1" name="content"><?php echo($this->getPageData()->getContent()); ?></textarea>
   		 <input type="submit" value="zapisz">
    </form>
    	  <button type="submit" onClick="areUSure();" style="float: right; clear: both;">Usuń</button>
				
		</div>	
    
	
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>