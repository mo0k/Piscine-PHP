#!/usr/bin/php
<?PHP
	$result;
	while (1)
	{
		print("Entrez un nombre: ");
		$number = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
			exit();
		if (!is_numeric($number))
			print("'".$number."' n'est pas un chiffre\n");
		else
		{
			$result = ($number % 2) ? "Impair" : "Pair";
			print("Le chiffre ".$number." est ".$result."\n");
		}
	}
?>