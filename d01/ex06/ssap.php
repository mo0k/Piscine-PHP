#!/usr/bin/php
<?PHP

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

	if ($argc < 2)
		return ;
	$tab1 = array();
	$i = 1;
	while ($i < $argc)
	{
		$j = 0;
		$tab2 = ft_split($argv[$i]);
		while ($j < count($tab2))
			array_push($tab1, $tab2[$j++]);
		$i++;
	}
	sort($tab1);
	foreach ($tab1 as $elem) {
		print($elem."\n");
	}

?>