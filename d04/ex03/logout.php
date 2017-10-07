<?
	session_start();
	if ($_SESSION["logged_on_user"] == "")
		return ;
	$_SESSION["logged_on_user"] = "";

?>