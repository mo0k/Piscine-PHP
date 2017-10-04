#!/usr/bin/php
<?php


if ($argc != 4)
{
	echo "Incorrect Parameters";
	return ;
}
	switch (trim($argv[2]))
	{
		case '+':
			print(trim($argv[1]) + trim($argv[3])."\n");
			break;
		case '-':
			print(trim($argv[1]) - trim($argv[3])."\n");
			break;
		case '/':
			print(trim($argv[1]) / trim($argv[3])."\n");
			break;
		case '*':
			print(trim($argv[1]) * trim($argv[3])."\n");
			break;
		case '%':
			print(trim($argv[1]) % trim($argv[3])."\n");
			break;
		default:
			break;
	}
	return ;

?>