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
	$j = 0;
	$tab1 = array();
	$tab2 = ft_split($argv[1]);
	$ret = "";
	while ($j < count($tab2))
		array_push($tab1, $tab2[$j++]);
	$j = 0;
	while (++$j < count($tab1))
		$ret .= $tab1[$j]." ";
	$ret .= $tab1[0];
	print(trim($ret)."\n");
?>