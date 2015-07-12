<?php

	/*
		Reversing String
	*/

	print strrev("Se laminan animales");

	echo '<hr>';

	$s = "Habia una vez una tortuga";
	$palabras = explode(" ", $s);
	$palabras = array_reverse($palabras);
	$s = implode(" ", $palabras);
	print $s;

	echo "<hr>";

	$s = "Habia una vez una tortuga";
	$reversed_s = implode(' ',array_reverse(explode(' ',$s)));
	echo $reversed_s;

?>