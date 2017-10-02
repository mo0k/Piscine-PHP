#!/usr/bin/php
<?php
function ft_split($string)
{
	$tab = explode(" ", $string);
	sort($tab);
	return($tab);
}
if ($argc != 1)
{
	$i = 0;
	$all_elem = array();
	print_r("nbr arg:".$argc);
	while (++$i < $argc)
	{
			print_r($argv[$i]);
			echo "\n";
			$tab = ft_split($argv[$i]);
			$all_elem = array_merge($all_elem, $tab);
	}
	print_r($all_elem);
	foreach ($all_elem as $elem)
	{
		if(is_numeric($elem) == TRUE)
			$numeric[] = $elem;
	}
	sort($numeric, SORT_STRING);
	foreach ($all_elem as $elem)
	{
		if(ctype_alpha($elem) == TRUE)
			$string[] = $elem;
	}
	sort($string, SORT_NATURAL | SORT_FLAG_CASE);
	foreach ($all_elem as $elem)
	{
		if(ctype_alpha($ele) == FALSE && is_numeric($elem) == FALSE)
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