<?php

	/*
		Rand_weighted

	*/


    function rand_weighted($numbers) {
        $total = 0;
        foreach($numbers as $number => $weight) {
            $total += $weight;
            $distribution[$number] = $total;
        }
        $rand = mt_rand(0, $total -1);

        foreach($distribution as $number => $weight) {
            if ($rand < $weight) { return $number;}
        }
    }

?>