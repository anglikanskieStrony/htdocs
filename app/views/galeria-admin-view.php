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
	


	<div id="content" style="border-radius: 3vmax;">

			<?php foreach($this->getPageData() as $picture)
			{
				echo('<div><a onclick="areUSure('. $picture->getId().')"><img src="/static/gallery_images/'.$picture->getAddress().'" class="gallery-picture admin" title="Usuń zdjęcie"></a></div>');
			} ?>
			<div style="clear:both;min-height:200px;">

			<form method="post" enctype="multipart/form-data" action="/admin/galeria/index.php?action=add">
				</br></br>
				<p>Dodaj nowe zdjęcie</p>
				</br></br>
				<div class="fileUpload btn" style="float:left; width:20%;margin:0">
    				<span>Wybierz plik</span>
    				<input id="uploadBtn" type="file" name="filename" class="upload" onchange="document.getElementById('uploadFile').value = this.value;" />
				</div>
				<div style="float:left; width:45%">
					<input id="uploadFile" placeholder="  . . .  " class="text_box" style="width:90%; margin:0;	 disabled="disabled" />
				</div>
				<div style="float:left; width:20%">
				<input type="submit" value="Dodaj" class="btn" style="height:50%;width:100%"name="submit">
				</div>
			</form>
			</div>
		
		</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>