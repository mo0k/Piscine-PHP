#!/usr/bin/php
<?php

if ($argc < 2)
	return ;

$new = $argv[1];
while (preg_match("/\t/", $new))
	$new = preg_replace("/\t/", " ", $new);
while (preg_match("/  /", $new))
	$new = preg_replace("/  /", " ", $new);
print($new);
?>
