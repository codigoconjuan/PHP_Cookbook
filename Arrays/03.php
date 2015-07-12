<?php
	/**
	 * Append Array TO Another
	 * 
	 */

	$p_languajes = array('Perl', 'PHP');
	$p_languajes = array_merge($p_languajes, array('Python') );

	echo "<pre>";
	print_r($p_languajes);
	echo "</pre>";

	/**
	 * ANOTHER
	 */

	$lc = array('a', 'b' => 'b');
	$uc = array('A', 'b' => 'B');
	$ac = array_merge($lc, $uc);
	echo "<pre>";
	print_r($ac);
	echo "</pre>";


	/**
	 * IMPRIMIR CON JOIN
	 */

	$thundercats = array('Leono', 'Pantro', 'Tigra', 'Chitara', 'Snarf');
	print "Los thundercats son " . join(', ', $thundercats) . ' .';
	echo "<hr>";

	/**
	 * Array POP
	 * Ultimo elemento de un Array
	 */

	$thundercats = array('Leono', 'Pantro', 'Tigra', 'Chitara', 'Snarf');
	$thundercats = array_pop($thundercats);
	print $thundercats;

?>