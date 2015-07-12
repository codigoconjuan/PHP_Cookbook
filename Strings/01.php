<?php

	/*
		Accesing Substrings
		Check if a string contains an @
	*/

		if(strpos($_POST['email'], '@') === false) {
			print "No hay @ en el correo electronico";
		}


?>