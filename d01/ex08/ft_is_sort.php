<?php

function ft_is_sort($tab)
{
	$i = 1;
	$temp = $tab[0];
	while ($i < count($tab))
	{
		if ($temp > $tab[$i])
			return (0);
		$temp = $tab[$i];
		++$i;
	}
	return (1);
}

?>