<?php

	session_start();
	if ($_SESSION["logged_on_user"] == "")
	{
		echo "ERROR\n";
		return ;
	}
	if ($_SESSION["logged_on_user"]["login"] == "" || $_SESSION["logged_on_user"]["login"][0] == "")
	{
		echo "ERROR\n";
	}
	else
		echo $_SESSION["logged_on_user"]["login"];

?>