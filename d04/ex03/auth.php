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

function		check_account($username, $passwd, $accounts)
{
	if ($username == "" || $username[0] == "" ||
		$passwd == "" || $passwd[0] == "")
	{
		return (FALSE);
	}
	foreach ($accounts as $account)
	{
		if ($account["login"] == $username)
		 	$account["passwd"] = hash("whirlpool", $passwd);
			return (TRUE);
	}
	return (FALSE);
}

function auth($login, $passwd)
{
	if ($login == "" || $login[0] == "" ||
		$passwd == "" || $passwd[0] == "")
		return (FALSE);
	if (do_path("../private") === FALSE)
		return (FALSE);
	if (($datafile = file_get_contents("../private/passwd")) === FALSE)
		return (FALSE);
	$temp = unserialize($datafile);
	if (check_account($login, $passwd, ($temp === FALSE) ? array() : $temp) === FALSE)
		return (FALSE);
	return (TRUE);
}

?>