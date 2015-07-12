<?php

	/*
		Checking Numbers
	*/
	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');
    var_dump($fruits);
    echo "<hr>";


    // Otra Forma
    $frutas[0] = 'manzana';
    $frutas[1] = 'naranja';
    $frutas[2] = 'platano';
    $frutas[3] = 'guayaba';
    var_dump($frutas);
    echo "<hr>";

    // PHP 5.4

    $fruits = ['Manzana', 'Banans', 'Melon', 'Guayaba'];
    var_dump($fruits);
    echo "<hr>";

    //Crear array y recorrerlo

    $frutas = [
        'roja' => 'Manzanas',
        'amarillo' => 'Platanos',
        'beige' => 'Melon',
        'cafe' => 'Kiwi' 
    ];


    $frutas['orange'] = 'Orange';
    foreach($frutas as $color => $fruta) {
        print "$fruta son color $color <br/>";
    }
    echo "<hr>";


    // Recorrer un array usando list();

    $fruits = array('Manzana', 'Banans', 'Melon', 'Guayaba');

    list($red, $yellow, $beige, $brown) = $frutas;

    // Iniciar Array desde 1;

    $presidentes = array(1 => 'Washington', 'Adams', 'Jefferson', 'Madison');

    foreach ($presidentes as $number => $presidente) {
        print "$number: $presidente" . "<br>";
    }





?>