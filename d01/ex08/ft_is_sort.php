<?php

function ft_is_sort($tab)
{
	$temp1 = $tab;
	$temp2 = $tab;

	sort($temp1);
	asort($temp2);
	if ($temp1 === $tab)
		return (1);
	if ($temp2 === $tab)
		return (1);
	return (0);
}

?>