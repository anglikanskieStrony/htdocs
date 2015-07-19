<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
	<script type="application/ecmascript">
	function areUSure(id)
	{
		if(confirm("Czy na pewno chcesz usunąc zdjęcie?"))
		{
			location.href='/admin/galeria/index.php?id='+id+'&action=delete';
		}
	}
	</script>

	<div id="content">

			<?php foreach($this->getPageData() as $picture)
			{
				echo('<div><a onclick="areUSure('. $picture->getId().')"><img src="/static/gallery_images/'.$picture->getAddress().'" class="gallery-picture admin" title="Usu� zdj�cie"></a></div>');
			} ?>
			<div style="background-color: #b40000; clear:both;">

			<form method="post" enctype="multipart/form-data" action="/admin/galeria/index.php?action=add">
				<p>Dodaj nowe zdjęcie</p>

				Wybierz plik do dodania: <input type="file" size="20" name="filename">
				<input type="submit" value="Dodaj" name="submit">
			</form>
			</div>
		
		</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>