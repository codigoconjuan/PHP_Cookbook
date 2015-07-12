<?php

	/*
		Comparing Float Numbers
	*/

    $delta = 0.0001;

    $a = 1.0001;
    $b = 1.0000;

    if(abs($a-$b) < $delta) {
        print "$a y $b son iguales";
    }

   

?>