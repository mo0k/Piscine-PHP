<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
	<style>
		body{background:#FFFFFF;}
		#title{color:black;margin:0 auto 20px auto;width:250px;text-align: center;}
		section{width:400px;margin:auto;}
		form{width:260px;margin:15px auto;background-color: rgb(102,178,255);border-radius: 10px;border:2px solid black;}
		div#content{width:200px;margin:0 auto;}
		div.block{display:inline-block;margin: 5px 0;text-align: right}
		div.block:first-child{width: 65px;height:40px;}
		a{text-align:center;width:150px;margin:auto 50px;}
		hr{margin:50px 0 0 0;}
		label, input{display:block;clear:both;margin:2px 0;}
		input[type="submit"]{display:block;margin:5px auto;width:200px;}
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
			<h1 id="title">Sessions</h1>
			<section>
				<form action="index.php" method="GET" enctype="multipart/form-data">
					<div id="content">
						<div class="block">
							<label>Login:</label>
							<label>Password:</label>
						</div>
						<div class="block">
							<input type="text" name="login" value<?php echo '="'.$_SESSION["login"].'"'?> />
							<input type="Password" name="passwd" value<?php echo '="'.$_SESSION["passwd"].'"'?> />
						</div>
						<input type="submit" name="submit" value="OK"/>
					</div>
				</form>
			</section>
			<hr/>
	</body>
</html>