<?php

	/*
		Strip from Numbers
	*/

        $number = "10.30";


        $withCommas = is_numeric($number);

        $withoutCommas = is_numeric(str_replace(',', '', $number));

        if($withoutCommas == 1) {
            echo "si es";

        } else {
            echo "no es";
        }


?>