<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">
		
		
	

<h1>Zaloguj się</h1>


<form action="/admin/index.php" method="post">
	<div style="margin-top:7%">
		<input type="text" name="login" class="text_box" id="login" required="true" value="Login" onfocus="javascript:if(this.value=='Login'){this.value=''}" onblur="javascript: if(this.value==''){this.value='Login';}">
		<input type="text" name="password" class="text_box" id="password" required="true" value="hasło" onfocus="javascript:if(this.value=='hasło'){this.type='password'; this.value=''}" onblur="javascript: if(this.value==''){this.type='text';this.value='hasło';}">
		<input type="submit" class="btn" style="width:24%;margin:5%;margin-left:38%;margin-right:38%;" value="zaloguj">
	</div>
</form>


</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>