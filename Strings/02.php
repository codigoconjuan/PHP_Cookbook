<?php

	/*
		Extracting Substrings
		Extract part of string
	*/

	
	$substring = substr($string, $start, $length);
	$username = substr($_GET['username'], 0,8);

	print substr("Hay un arbol ahi",6,5);

	print substr("Mira hay un arbol ahi",17);

	echo "<br/>";

	print substr("Mira hay un arbol ahi", -6);

	echo "<br/>";

	print substr("Mira hay un arbol ahi", -17, 5);


?>