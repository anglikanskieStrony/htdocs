<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  	<link rel="stylesheet" href="/static/style/style.css" />
  	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css' />
  	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="/static/images/kleks.png" type="image/png" />
	<title>whatever</title>
</head>

<body>

<header>
		<div class="header">
			<img class="logo" src="/static/images/logo.png"/>
			<ul id="menu-bar">
			 <li><a href="#">Contact Us</a></li>
			 <li><a href="#">About</a></li>
			 <li><a href="#">Products</a>
			  <!--<ul>
			  <li><a href="#">Services Sub Menu 1</a></li>
			  </ul> -->
			 </li>
			 <li><a href="#">Services</a>
			 </li>
			 <li class="active">
			 <a href="#">Home</a></li>
			</ul>
		</div>
</header>

	<div  style="position:fixed; background-image: url(/static/images/kleks.png);background-position: 50% 20%;background-size: 40%; background-repeat: no-repeat; height: 900px; width: 100%; z-index: -1;">
	<div id="text1" class="text1">Kurwa mac</div>
	<div id="text2"  class="text1">Kurwa mac</div>
	<div id="text3"  class="text1">Kurwa mac</div>
	<div id="text4"  class="text1">Kurwa mac</div>
	
	
	</div>
	
	<div style="height: 3000px;background-color: rgba(0, 0, 0, 0.0);">
	
	
	</div>
	
	<section class="bgnd bgnd-2 js-parallax-bg">
				<div class="container text-center">
					<p>Pierwsza sekcja</p>
				</div>
	</section>
	
	<section class="bgnd bgnd-1 js-parallax-bg">
				<div class="container text-center">
					<p>Druga sekcja</p>
				</div>
	</section>
	
	<section class="bgnd bgnd-2 js-parallax-bg">
				<div class="container text-center">
					<p>Trzecia sekcja</p>
				</div>
	</section>
	
	<section class="bgnd bgnd-1 js-parallax-bg">
				<div class="container text-center">
					<p>Czwarta sekcja</p>
				</div>
	</section>
	
	<section class="content">
		<div class="container">
		<p>Treść_2</p>
	</section>

<footer>
		<div class="footer">
		<p>KONTAKT</p>
		</div>
</footer>
	

	<script src="/static/scripts/gator/gator.min.js"></script>
	<script src="/static/scripts/JS/parallax.js"></script>
	<script>
	//	ParallaxBG.init();
	window.onscroll = function () {
		alert(pageYOffset);
		 var a = window.innerHeight;
		if ( window.pageYOffset > a) {

			alert(a/2);
			
			  window.scroll(0,0);
			}
		
//window.scrollTo(0,0);




}
	</script> 
</body>

</body>
</html>

