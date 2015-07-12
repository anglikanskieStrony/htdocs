<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-view.php"); ?>
		<div id="content">

<h1>Utwórz pierwszego użytkownika</h1>
<form action="/admin/user/?action=add" method="post">
<div>Login:</div>
<input type="text" name="login" id="login">
<div>Hasło:</div>
<input type="password" name="password" id="password">
<div>Powtórz hasło:</div>
<input type="password" name="password-repeat" id="password-repeat">
<input type="submit" value="utwórz">
</form>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>