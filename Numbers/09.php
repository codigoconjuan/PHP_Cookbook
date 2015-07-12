<?php 
	/**
	 * 	Correct Plurals
	 */

	$numero = 4;

	print "Tu busqueda regreso $numero " . ($numero == 1 ? 'hit': 'hits') . '.';

	/**
	 * otra opcion 
	 */

	function may_pluralize($singular_word, $amount_of) {
		// array de plurales
		$plurals = array(
			'fish' => 'fish',
			'person' => 'people'
		);

		//solo 1
		if(1 == $amount_of) {
			return $singular_word;
		}

		// mas de una es plural

		if(isset($plurals[$singular_word])) {
			return $plurals[$singular_word];
		}

		return $singular_word . 's';
	}


	$number_of_fish = 1;

	$out1 = "Me COmi $number_of_fish" . may_pluralize('fish', $number_of_fish) . '.';

	$number_of_people = 4;
	$out2 = "Soylent Green es" . may_pluralize('person', $number_of_people) . '.';

	echo $out1;

	echo $out2;

?>