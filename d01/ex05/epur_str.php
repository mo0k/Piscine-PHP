#!/usr/bin/php
<?PHP

	if ($argc != 2)
		return ;
	$tab = array_filter(explode(' ', $argv[1]));
	$ret = "";
	foreach ($tab as $elem) {
		$ret .= $elem." ";
	}
	print(trim($ret)."\n")
?>