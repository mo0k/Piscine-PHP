#!/usr/bin/php
<?php

if ($argc < 2)
	return ;

$new = $argv[1];
 print(preg_match("/^{Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi,Dimanche}/", $new));
?>
