<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content" style="border-radius: 3vmax;">
			<div class="popup-gallery">
			<?php foreach($this->getPageData() as $picture)
			{
				echo('<div><a href="/static/gallery_images/'.$picture->getAddress().'" ><img src="/static/gallery_images/'.$picture->getAddress().'" class="gallery-picture"></a></div>');
			} ?>
			</div>
		
		</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>