<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content">
			<div class="popup-gallery">
			<?php foreach($this->getPageData() as $picture)
			{
				echo('<span style="width: 200px; height: 200px; display: inline-block; border: 3px solid red;"><a href="/static/gallery_images/'.$picture->getAddress().'" ><img src="/static/gallery_images/'.$picture->getAddress().'" style="max-width: 100%; max-height: 100%;"></a><span>');
			} ?>
			</div>
		
		</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>