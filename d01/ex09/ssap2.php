#!/usr/bin/php
<?php
function ft_split($string)
{
	$tab = explode(" ", $string);
	sort($tab);
	return($tab);
}

function is_alpha($str)
{
	$i;
	$i = -1;
	while (isset($str[++$i]))
	{
		if ($str[$i] < 'A' || ($str[$i] > 'Z' && $str[$i] < 'a') || $str[$i] > 'z')
			return (FALSE);
	}
	return (TRUE);
}

if ($argc != 1)
{
	$i = 0;
	$all_elem = array();
	$numeric = array();
	$string = array();
	$ascii = array();
	while (++$i < $argc)
	{
			$tab = ft_split($argv[$i]);
			$all_elem = array_merge($all_elem, $tab);
	}
	foreach ($all_elem as $elem)
	{
		if(is_numeric($elem) == TRUE)
			$numeric[] = $elem;
	}
	sort($numeric, SORT_STRING);
	foreach ($all_elem as $elem)
	{
		if(is_alpha($elem) === TRUE)
			$string[] = $elem;
	}
	sort($string, SORT_NATURAL | SORT_FLAG_CASE);
	foreach ($all_elem as $elem)
	{
		if(is_alpha($elem) === FALSE && is_numeric($elem) === FALSE)
			$ascii[] = $elem;
	}
	sort($ascii);
	foreach($string as $element)
	{
		echo $element;
		echo "\n";
	}
	foreach($numeric as $element)
	{
		echo $element;
		echo "\n";
	}
	foreach($ascii as $element)
	{
		echo $element;
		echo "\n";
	}
}
?>