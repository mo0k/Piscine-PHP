<?php

function do_set($keys, $values, $i)
{
	if ($keys[$i] != "name")
		return ;
	$name = $values[$i];
	$i++;
	if (isset($keys[$i]) && $keys[$i] == "value")
		setcookie($name, $values[$i], time() + 3600);
}

function do_get($keys, $values, $i)
{
	if ($keys[$i] == "name")
	{
		echo $_COOKIE[$values[$i]];
		echo $HTTP_COOKIE_VARS[$values[$i]];
	}
}

function do_del($keys, $values, $i)
{
	if ($keys[$i] == "name")
		setcookie($values[$i], " ", time()-1);
}

$keys = array();
$values = array();
foreach ($_GET as $key => $value)
{
	array_push($keys, $key);
	array_push($values, $value);
}
$i = -1;
while (++$i < count($keys))
{
	if ($keys[$i] == "action")
	{
		switch ($values[$i]) {
			case 'set':
				do_set($keys, $values, ++$i);
				break;
			case 'get':
				do_get($keys, $values, ++$i);
				break;
			case 'del':
				do_del($keys, $values, ++$i);
				break;
			default:
				break;
		}
	}
}

?>