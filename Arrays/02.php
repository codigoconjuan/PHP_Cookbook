<?php
	/**
	 * Guardando muchos valores por llave en un array
	 */

	$frutas = array('red' => array('strawberry', 'apple'), 
					'yellow' => array('banana'));

	echo "<pre>";
	var_dump($frutas);
	echo "</pre>";


	/**
	 * Borrando elementos de un array
	 */

	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');

	unset($fruits[2]);
	echo "<pre>";
	var_dump($fruits);
	echo "</pre>";


	/**
	 * Borrando MULTIPLES ELEMENTOS de un array
	 */

	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');

	array_splice($fruits, 1,3);
	echo "<pre>";
	var_dump($fruits);
	echo "</pre>";



	/**
	 * Contar elementos de un array
	 */

	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');

	
	print $fruits[1];
	echo "<pre>";
	echo count($fruits);
	echo "</pre>";


	/**
	 * 
	 * Array Splice  reindexa los arrays 
	 */

	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');
	array_splice($fruits, 2, 2);
	echo "<pre>";
	print_r($fruits);
	echo "</pre>";

	/**
	 * 
	 * Expandir Array
	 */


	$fruits = array('manzana', 'naranja', 'platano', 'guayaba');
	$fruits = array_pad($fruits, 5, 'algomas');
	echo "<pre>";
	print_r($fruits);
	echo "</pre>";


?>