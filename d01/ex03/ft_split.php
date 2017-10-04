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
	sort($ret);
	return ($ret);
}

?>
