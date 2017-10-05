#!/usr/bin/php
<?php

function ft_split($string)
{
	$tab = explode(' ', $string);
	$ret = array();
	foreach ($tab as $word)
	{
		if (isset($word[0]))
			array_push($ret, $word);
	}
	return ($ret);
}
function test($tab)
{
	$i = 0;
	while ($i < count($tab))
	{
		if (comp($tab[$i], $tab[$i+1]) < 0)
		{
			$temp = $tab[$i];
			$tab[$i] = $tab[$i+1];
			$tab[$i + 1] = $temp;
			$i = 0;
		}
		else
			$i++;
	}
	return ($tab);
}

function comp($a, $b)
{
	$base = "abcdefghijklmnopqrstuvwxyz0123456789";
	$lower_a = strtolower($a);
	$lower_b = strtolower($b);
	for($i = 0 ; $i<32 ; $i++)
		$base = $base.chr($i);
	$base = $base."!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	#print($base."\n");
	$i = 0;
	while ($i < count($lower_a) && $i < count($lower_b))
	{
		if (!isset($lower_a[$i]) || !isset($lower_b[$i]))
			break;
		$ptr1 = strstr($base, $lower_a[$i]);
		$ptr2 = strstr($base, $lower_b[$i]);
		if (strlen($ptr1) == strlen($ptr2))
			$i++;
		else
		{
			return (strlen($ptr1) - strlen($ptr2));
		}

	}
	return (0);
}

function is_alpha($str)
{
	$i;
	$i = 0;
	if ($str[$i] < 'A' || ($str[$i] > 'Z' && $str[$i] < 'a') || $str[$i] > 'z')
		return (FALSE);
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
	$all_elem = test($all_elem);
	foreach ($all_elem as $element)
	{
		echo $element;
		echo "\n";
	}
	return ;
}
?>