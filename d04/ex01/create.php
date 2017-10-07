<?php

function exit_prog($value)
{
	echo $value;
	return ;
}

function		do_path($path)
{
	if (file_exists($path) === FALSE
		&& mkdir($path) === FALSE)
		return (FALSE);
	if (file_exists($path."/passwd") === FALSE
		&& file_put_contents($path."/passwd", NULL) === FALSE)
		return (FALSE);
	return (TRUE);
}

function		user_exist($accounts, $username)
{
	foreach ($accounts as $account)
	{
		if ($account["login"] == $username)
			return (FALSE);
	}
	return (TRUE);
}

function		add_account($username, $passwd, $accounts)
{
	if (user_exist($accounts, $username) === FALSE)
		return (FALSE);
	$account["login"] = $username;
	$account["passwd"] = hash("whirlpool", $passwd);
	$accounts[] = $account;
	if (file_put_contents("../private/passwd", serialize($accounts)) === FALSE)
		return (TRUE);
	return (TRUE);
}

if ($_POST["submit"] == "OK")
{
	if ($_POST["login"] = "" || $_POST["login"][0] == "" ||
		$_POST["passwd"] = "" || $_POST["passwd"][0] == "")
		return (exit_prog("ERROR\n"));
	if (do_path("../private") === FALSE)
		return ;
	if (($datafile = file_get_contents("../private/passwd")) === FALSE)
		return ;
	$temp = unserialize($datafile);
	if (add_account($_POST["login"], $_POST["passwd"], ($temp === FALSE) ? array() : $temp) === FALSE)
		return (exit_prog("ERROR\n"));
	return (exit_prog("OK\n"));
}
else
	echo "ERROR\n"

?>