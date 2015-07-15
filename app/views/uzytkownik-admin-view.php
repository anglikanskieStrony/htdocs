<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		
		
		<script type="application/javascript">
		function validate()
		{
			if(document.getElementById("password").value === document.getElementById("password-repeat").value)
			{
				document.getElementById("form").submit();
			}
			else
				alert("Pola hasło i powtórz hasło nie są takie same");
		}
		</script>
		
		<div id="content">

<h1>Utwórz pierwszego użytkownika</h1>
<form id="form" action="/admin/user/?action=add" method="post" onsubmit="validate(); return false;">
<div>Login:</div>
<input type="text" name="login" id="login" required="true">
<div>Hasło:</div>
<input type="password" name="password" id="password" required="true">
<div>Powtórz hasło:</div>
<input type="password" name="password-repeat" id="password-repeat" required="true">
<input type="submit" value="utwórz">
</form>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>