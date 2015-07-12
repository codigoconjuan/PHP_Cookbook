<?php

	/*
		Split String
	*/


		$palabra = "una oración que vamos a separar";

		$palabras = explode(" ", $palabra);

		var_dump($palabras);

		echo "<hr>";

		$palabras2 = explode(" ", $palabra, 5);

		var_dump($palabras2);


?>