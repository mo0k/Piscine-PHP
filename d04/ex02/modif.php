<?php

function exit_prog($value)
{
	echo $value;
	return ;
}

function		do_path($path)
{
	//if (file_exists($path) === FALSE
	//	&& mkdir($path) === FALSE)
	//	return (FALSE);
	//if (file_exists($path."/passwd") === FALSE
	if(file_put_contents($path."/passwd", NULL, FILE_APPEND) === FALSE)
		return (FALSE);
	return (TRUE);
}

function		user_and_password_exist($accounts, $username, $passwd, $old_passwd)
{
	foreach ($accounts as $account)
	{
		if ($account["login"] == $username && $account["passwd"] == hash("whirlpool", $old_passwd))
		{
			$account["passwd"] = hash("whirlpool", $passwd);
			return (TRUE);
		}
	}
	return (FALSE);
}

function		add_account($username, $old_passwd, $passwd, $accounts)
{
	if (user_and_password_exist($accounts, $username, $passwd, $old_passwd) === FALSE)
		return (FALSE);
	if (file_put_contents("../private/passwd", serialize($accounts)) === FALSE)
		return (TRUE);
	return (TRUE);
}

if ($_POST["submit"] == "OK")
{
	if ($_POST["login"] == "" || $_POST["login"][0] == "" ||
		$_POST["oldpw"] == ""|| $_POST["oldpw"][0] == ""||
		$_POST["newpw"] == ""|| $_POST["newpw"][0] == "")
		return (exit_prog("ERROR\n"));
	if (do_path("../private") === FALSE)
		return ;
	if (($datafile = file_get_contents("../private/passwd")) === FALSE)
		return ;
	$temp = unserialize($datafile);
	if (add_account($_POST["login"], $_POST["oldpw"], $_POST["newpw"], ($temp === FALSE) ? array() : $temp) === FALSE)
		return (exit_prog("ERROR\n"));
	return (exit_prog("OK\n"));
}
else
	echo "ERROR\n"

?>