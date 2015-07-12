<?php

	/*
		Replacing Substrings
	*/

	print substr_replace("Mi perro es de color azul" , "Pescado", 12);

	print substr_replace("Mi perro es de color azul", "Pescado", 3,5);

	echo "<hr>";

	$tarjetaCredito = '1234 1029 1209 1029';
	print substr_replace($tarjetaCredito, 'xxxx', 0, strlen($tarjetaCredito)-4);

?>