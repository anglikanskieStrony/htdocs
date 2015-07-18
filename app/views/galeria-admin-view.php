<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">

			<?php foreach($this->getPageData() as $picture)
			{
				echo('<span style="width: 200px; height: 200px; display: inline-block; border: 3px solid red;"><a href="/static/gallery_images/'.$picture->getAddress().'" ><img src="/static/gallery_images/'.$picture->getAddress().'" style="max-width: 100%; max-height: 100%;"></a><span>');
			} ?>
			<div style="background-color: #b40000;">

			<form method="post" enctype="multipart/form-data" action="/admin/galeria/index.php?action=add">
				<h2>Dodaj nowe zdjêcie</h2>

				Wybierz plik do dodania: <input type="file" size="20" name="filename">
				<input type="submit" value="Dodaj" name="submit">
			</form>
			</div>
		
		</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>