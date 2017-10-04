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

	if ($argc != 2)
		return ;
	$ret = "";
	foreach (ft_split($argv[1]) as $elem)
		$ret .= $elem." ";
	print(trim($ret)."\n")
?>