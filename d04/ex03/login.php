<?php

include 'auth.php';

if ($_GET["login"] == NULL || $_GET["login"][0] == NULL ||
	$_GET["passwd"] == NULL || $_GET["passwd"][0] == NULL)
{
	echo "ERROR";
	return ;
}
session_start();
if (auth($_GET["login"], $_GET["passwd"]) === TRUE)
{
	$account["login"] = $_GET["login"];
	$account["passwd"] = hash("whirlpool", $_GET["passwd"]);
	$_SESSION["logged_on_user"] = $account;
	echo "OK";
}
else
	echo "ERROR";

?>