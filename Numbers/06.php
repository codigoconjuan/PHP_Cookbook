<?php

	/*
		Printing numbers with Rand
	*/

    $lower = 65;
    $upper = 97;

    $random_number = mt_rand($lower, $upper);

    echo $random_number;

    echo "<hr>";

    function pick_color() {
        $colores = array('red', 'azul', 'verde', 'amarillo');
        $i = mt_rand(0, count($colores) - 1);
        return $colores[$i];
    }

    mt_rand(24913);
    $first = pick_color();
    $segundo = pick_color();

    print "$first es rojo y $segundo es verde";


?>