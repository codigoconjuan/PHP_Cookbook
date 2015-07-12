<?php

	/*
		Series de Numeros y hacer una raiz cuadrada
	*/

	$start = 3;
    $end = 7;

    for ($i = $start; $i <= $end; $i++) {
        printf("%d squared is %d <br/> ", $i, $i * $i);
    }

    echo "<hr>";

    // increment by 2
    for ($i = $start; $i <= $end; $i += 2) {
        printf("%d squared is %d <br/> ", $i, $i * $i);
    }

    echo "<hr>";

    // keep numbers to use beyond iteration 

    $numbers = range(3,7);
    foreach($numbers as $n) {
        printf("%d squared is %d <br/> ", $n,$n*$n);
    }
    echo "<hr>";
    foreach($numbers as $n) {
        printf("%d cubed is %d  <br/>", $n, $n*$n*$n);
    }

    // Print a range 

    print_r(range('l', 'p'));

    echo "<hr>";

?>