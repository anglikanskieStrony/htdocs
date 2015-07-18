<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">
		
		
	

<h1>Zaloguj się</h1>

<div style="width:45%; float:left">
<form action="/admin/index.php" method="post">
<p>Login: <input type="text" name="login" id="login" required="true"></p>
<p>Hasło: <input type="password" name="password" id="password" required="true"></p></br></br>
</div>
<div style="width:45%; float:right">
<input type="submit" class="btn" style="width:50%" value="zaloguj">
</div>
</form>


</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>