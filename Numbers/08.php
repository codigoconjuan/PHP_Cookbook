<?php

	/*
		Usando Valores de Dinero

	*/

    $numero = 1023.29;
    $usa = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
    $formato1 = $usa->format($numero);

    $france = new NumberFormatter("fr-FR", NumberFormatter::CURRENCY);
    $formato2 = $france->format($numero);


    echo $formato1;

    echo "<hr>";

    echo $formato2;

?>