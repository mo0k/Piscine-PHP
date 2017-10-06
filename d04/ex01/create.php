<?php

function exit_prog($value)
{
	echo "OK"
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
	foreach ($account as $account_element)
	{
		if ($account_element["login"] == $username)
			return (FALSE);
	}
	return (TRUE);
}

function		add_account($username, $passwd, $accounts)
{
	if (user_exist($data, $username) === FALSE)
	{
		echo "return FALSE in add_account";
		return (FALSE);
	}
	$account_element["login"] = $username;
	$account_element["passwd"] = hash("whirlpool", $passwd);
	$accounts[] = $account_element;
	if (file_put_contents("../private/passwd", serialize($accounts), FILE_APPEND) === FALSE)
		return (TRUE);
	return (TRUE);
}

if ($_POST["submit"] == "OK")
{
	if (isset($_POST["login"]) && isset($_POST["login"][0]) &&
		isset($_POST["passwd"]) && isset($_POST["passwd"][0]))
	if (do_path("../private") === FALSE)
		return ;
	if (($datafile = file_get_contents("../private/passwd")) === FALSE)
		return ;
	$temp = unserialize($datafile);
	if (add_account($_POST["login"], $_POST["passwd"], ($temp === FALSE) ? array() : $temp) === FALSE)
		return (exit_prog("ERROR"));
	return (exit_prog("OK"));
}
else
	echo "ERROR\n"
?>