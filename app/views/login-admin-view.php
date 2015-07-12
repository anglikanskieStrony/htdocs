<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content">

<h1>Zaloguj się</h1>
<form action="/admin" method="get">
<div>Login:</div>
<input type="text" name="login" id="login">
<div>Hasło:</div>
<input type="password" name="password" id="password">
<input type="submit" value="zaloguj">
</form>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>