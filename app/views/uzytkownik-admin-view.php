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
	<input type="submit" class="btn_admin" style="width:16.5%; right:2%;background: rgb(144,0,0);" value="utwórz">
	<br>
	<p>Login:</p>
	<input type="text" name="login" class="text_box" id="login" required="true">
	<p>Hasło:</p>
	<input type="password" name="password" class="text_box" id="password" required="true">
	<p>Powtórz hasło:</p>
	<input type="password" name="password-repeat" class="text_box" id="password-repeat" required="true">
</form>


</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>