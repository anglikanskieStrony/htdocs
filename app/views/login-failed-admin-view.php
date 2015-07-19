<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">

<h1>Nieprawidłowy login lub hasło</h1>

<form action="/admin/index.php" method="post">
		<input type="submit" class="btn_admin" style="width:16.5%; right:2%;background: rgb(144,0,0);" value="zaloguj">
	<div style="margin-top:7%">
		<input type="text" name="login" class="text_box" id="login" required="true" placeholder="Login" >
		<input type="password" name="password" class="text_box" id="password" required="true" placeholder="hasło">
	</div>
</form>


</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>