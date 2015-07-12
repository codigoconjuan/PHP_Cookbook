<?php

	/*
		Accesing Substrings
		Check if a string contains an @
	*/



	$string = "Este fin, iré a comprar un pollo de mascota";

	$vowels = 0;

	for ($i=0; $j = strlen($string); $i < $j; $i++) {
		if (strstr('aeiouAEIOU', $string[$i])) {
			$vowels++;
		}
	}


?>