#!/usr/bin/php
<?PHP

function ft_split($str)
{
	return (array_filter(explode(' ', $str)));
}

	if ($argc < 2)
		return ;
	$tab1 = array();
	$tab2 = array();
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