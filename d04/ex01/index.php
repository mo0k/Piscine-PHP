<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<style>
		body{background:rgb(110,110,110);}
		#title{color:white;margin:0 auto;width:50px;}
		section{width:510px;margin:auto;}
		form{width:310px;margin:5px auto;}
		div#content{width:430px;}
		div.block{display:inline-block;width: 150px;margin: 5px 0;text-align: right}
		div.block:first-child{width: 100px;height:40px;}
		a{text-align:center;width:150px;margin:auto 50px;}
		hr{margin:50px 0 0 0;}
		label, input{display:block;clear:both;}
		input[type="submit"]{display:block;margin:0px 95px;width:150px;height:50px;}
		body p{margin:0;float:right;}
	</style>
</head>
	<body>
		
		<?php
		if ($_GET["submit"] == "OK") 
		{
			$_SESSION["login"] = $_GET["login"];
			$_SESSION["passwd"] = $_GET["passwd"];
		}
		?>
			<h1 id="title">Login</h1>
			<section>
				<form action="index.php" method="GET" enctype="multipart/form-data">
					<div id="content">
						<div class="block">
							<label>Login:</label>
							<label>Password:</label>
						</div>
						<div class="block">
							<input type="text" name="login" value=<?= '"'.$_SESSION["login"].'"'?> />
							<input type="Password" name="passwd" value=<?= '"'.$_SESSION["passwd"].'"'?> />
						</div>
						<input type="submit" name="submit" value="OK"/>
					</div>
				</form>
			</section>
			<hr/>
	</body>
</html>