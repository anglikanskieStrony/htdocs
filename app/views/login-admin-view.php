<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">
		
		
	

<h1>Zaloguj się</h1>
<form action="/admin/index.php" method="post">
<div>Login:</div>
<input type="text" name="login" id="login" required="true">
<div>Hasło:</div>
<input type="password" name="password" id="password" required="true">
<input type="submit" value="zaloguj">
</form>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>