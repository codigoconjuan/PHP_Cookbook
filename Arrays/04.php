<?php
	/**
	 * 
	 * Checar si un Key Existe en un Array
	 */

	$thundercats = array('key' => 'Leono');

	if (array_key_exists('key', $thundercats)) {
		echo "si";
	} else {
		echo "no";
	}

	echo "<hr>";
	/**
	 * 
	 * Checar si un elemento esta en un array
	 */

	$libros = array('Emma', 'Jobs', 'La caida de los Gigantes');
	$libro = "Rayuela";
	if(in_array($libro, $libros)) {
		echo "Si lo tengo";
	} else {
		echo "no lo tengo";
	}

	echo "<hr>";

	/**
	 * array_flip 
	 */

	$libros = array('Emma', 'Jobs', 'La caida de los Gigantes');
	echo "<pre>";
	var_dump($libros);
	echo "</pre>";
	$libros = array_flip($libros);
	echo "<pre>";
	var_dump($libros);
	echo "</pre>";
	$libro = "Jobs";

	if(isset($libros[$libro])) {
		echo "Lo tengo";
	} else {
		echo "no lo tengo";
	}


?>