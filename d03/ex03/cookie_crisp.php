<?php

function do_set($keys, $values, $i)
{
	if ($keys[$i] != "name")
		return ;
	if (!isset($values[$i]) || !isset($values[$i][0]))
		return ;
	$name = $values[$i];
	$i++;
	if (isset($keys[$i]) && $keys[$i] == "value")
	{
		if (!isset($values[$i]) || !isset($values[$i][0]))
			return ;
		setcookie($name, htmlspecialchars($values[$i]), time() + 3600);
	}
}

function do_get($keys, $values, $i)
{
	//print_r($values);
	if (isset($keys[$i]) && $keys[$i] == "name"
		&& isset($values[$i]) && isset($values[$i][0]) && isset($_COOKIE[$values[$i]]))
		echo $_COOKIE[$values[$i]]."\n";
}

function do_del($keys, $values, $i)
{
	if ($keys[$i] == "name" && isset($values[$i]) && isset($values[$i][0]))
		setcookie($values[$i], NULL, time()-1);
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