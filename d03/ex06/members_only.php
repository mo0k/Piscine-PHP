<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Members</title>
	<style>
		body{background:rgb(110,110,110);}
		#title{color:white;margin:0 auto;width:50px;}
		section{width:510px;margin:auto;}
		form{width:310px;margin:5px auto;}
		div.block{display:inline-block;width: 150px;margin: 5px 0;text-align: right}
		a{text-align:center;width:150px;margin:auto 50px;}
		hr{margin:50px 0 0 0;}
		input[type="submit"]{margin:5px auto;width:100px;border-radius: 10px;}
		body p{margin:0;float:right;}
		label, input{display:block;clear:both;}
	</style>
</head>
	<body>
		<?php
		if (!isset($_POST["password"]))
		{
		?>
			<h1 id="title">Login</h1>
			<section>
				<form action="members_only.php" method="post" enctype="multipart/form-data">
					<div class="block">
						<label>Username:</label>
						<label>Password:</label>
					</div>
					<div class="block">
						<input type="text" name="username" value="username"/>
						<input type="password" name="password" />
					</div>
					<input type="submit" name="login" value="Valider"/>
				</form>
			</section>
			<hr/>
		<?php
		}
		else
		{
			if ($_POST["password"] != "jaimelespetitsponeys")
				echo "Cette zone est accessible uniquement aux membres du site";
			else
				echo "GG";
		}
		?>
	</body>
</html>