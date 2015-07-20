
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tre Xanh</title>
	
        <link rel="icon" href="/static/images/icon.png" type="image/png" />
		<link href='http://fonts.googleapis.com/css?family=Shojumaru&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/static/styles/style1.css">
		<script type="application/javascript" src="/static/scripts/tinymce/tinymce.min.js"></script>
	  	<script type="application/javascript" src="/static/scripts/jquery/jquery-1.11.3.min.js"></script>
	  	<script type="application/javascript" src="/static/scripts/magnificpopup/core.js"></script>
	  	<script type="application/javascript" src="/static/scripts/gallery.js"></script>

    	<script type="text/javascript">
        tinymce.init({
        	 selector: "textarea#elm1",
        	 theme: "modern",
        	 width: '100%',
        	 height: '50%',
        	 plugins: [
					 "autoresize",
        	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        	      
        	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        	         "save table contextmenu directionality emoticons template paste textcolor"
        	   ],
        	   content_css: "css/content.css,http://fonts.googleapis.com/css?family=Shojumaru&subset=latin",
        	   toolbar: "insertfile undo redo | styleselect | sizeselect | fontselect | fontsize | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
        	   fontsize_formats: "0.1vmax 0.2vmax 0.3vmax 0.4vmax 0.5vmax 0.6vmax 0.7vmax 0.8vmax 0.9vmax 1vmax 1.1vmax 1.2vmax 1.3vmax 1.4vmax 1.5vmax 1.6vmax 1.7vmax 1.8vmax 1.9vmax 2vmax 2.5vmax 3vmax",
        	   font_formats :	   "Arial=arial,helvetica,sans-serif;"+
					               "Georgia=georgia,palatino;"+
					               "Helvetica=helvetica;"+
					               "Impact=impact,chicago;"+
					               "Symbol=symbol;"+
					               "Shojumaru=Shojumaru,sans-serif;"+ 
					               "Tahoma=tahoma,arial,helvetica,sans-serif;"+
					               "Terminal=terminal,monaco;"+
					               "Verdana=verdana,geneva;"+
					               "Webdings=webdings",
				image_advtab: true,
				style_formats: [
        	        {title: 'Tytuł', block: 'h1', styles: {color: '#FFFF00','font-family': 'Shojumaru','font-size':'2vmax','line-height':'0.5vmax', 'text-shadow': '2px 2px #500000'}},
        	        {title: 'Podtytuł', inline: 'span', styles: {color: '#ff0000','font-family': 'Shojumaru','font-size':'1.5vmax','line-height':'0.5vmax', 'text-shadow': '2px 2px #500000'}},
        	        {title: 'Treść', inline: 'span', classes: 'example1', styles: {color:'#FFFF00','font-family': 'Shojumaru','text-shadow': '1px 1px #000000','font-size':'1.2vmax'}},
        	        {title: 'Tłumaczenie', inline: 'span', styles: {color: '#ffffff','font-family': 'Shojumaru','text-shadow': '1px 1px #000000','font-size':'0.7vmax'}},
        	    ]
            	  
            	 }); 
    </script>
  </head>
 
 
 <body>


<div id="main">

	  <div id="left" >
				<a href="https://www.facebook.com/pages/Bar-Orientalny-TRE-XANH/609219625804288?fref=ts"><img src="/static/images/facebook1.png" width="40%"/></a>
	  </div>
	  
      <div id="left-center">
			<a href="/admin"><img src="/static/images/logo.png" width="100%"/></a>
		    <img src="/static/images/bamboo.png" width="50%" style="position:relative; left:25%;"/>
				<ul>
					<li><a href="/admin/index">Edytuj start</a></li>
							<img id="line" src="/static/images/interlinia.png" />
					<li><a href="/admin/menu">Edytuj menu</a></li>
							<img id="line" src="/static/images/interlinia.png" />
					<li><a href="/admin/kontakt">Edytuj kontakt</a></li>
							<img id="line" src="/static/images/interlinia.png"/>
					<li><a href="/admin/galeria">Edytuj galerię</a></li>
				</ul>
	  </div>
	  	 <div id="right-center">
	  	 	<div id="logout">
				<button type="button" class="btn_admin" style="width:100%;position:relative" onClick="location.href='/admin?action=logout'">Wyloguj</button>
			</div>