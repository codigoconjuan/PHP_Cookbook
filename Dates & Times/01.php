<?php
	$stamp = mktime(0,0,0,1,1,1986);
	print date('l', $stamp);

	echo "<hr>";


	// Sat, 11 Jul 2015 15:21:47 -0700
	print date('r');
	echo "<hr>";


	// Sat, 11 Jul 2015 15:21:47 -0700
	$when = new DateTime();
	print $when->format('r');
	echo "<hr>";

	// Time Parts
	$now_1 = getdate();
	$now_2 = localtime();
	// 15:26:28
	print "{$now_1['hours']}:{$now_1['minutes']}:{$now_1['seconds']}";
	echo "<br/>";
	print "$now_2[2]:$now_2[1]:$now_2[0]";

	echo "<hr>";

	// use getdate();
	// July 11, 2015
	$a = getdate();
	printf("%s %d, %d", $a['month'], $a['mday'], $a['year']);
	echo "<hr>";



	// localtime();
	// 7/11/2015
	$a = localtime();
	$a[4] += 1;
	$a[5] += 1900;
	print "$a[4]/$a[3]/$a[5]";
	echo "<hr>";


	// Array
	$when = new DateTime("@163727100");
	$when->setTimeZone(new DateTimeZone('America/Los_Angeles'));
	$parts = explode('/', $when->format('Y/m/d/H/i/s'));
	var_dump($parts);
	echo "<hr>";


	// Format in a particular Way
	//11/Jul/2015
	print date('d/M/Y');
	echo '<br/>';
	$when = new DateTime();
	print $when->format('d/M/Y');
	echo "<hr>";

	// Finding Difference Between 2 dates.
// 7:32:56 pm on May 10, 1965
$first = new DateTime("1965-05-10 7:32:56pm", new DateTimeZone('America/New_York'));
// 4:29:11 am on November 20, 1962
$second = new DateTime("1962-11-20 4:29:11am", new DateTimeZone('America/New_York'));
$diff = $second->diff($first);
printf("The two dates have %d weeks, %s days, " .
       "%d hours, %d minutes, and %d seconds " .
       "elapsed between them.",
       floor($diff->format('%a') / 7),
       $diff->format('%a') % 7,
       $diff->format('%h'),
       $diff->format('%i'),
       $diff->format('%s'));


	// Validating a Date;

	$ok = checkdate(3,10,1993);
	$not_ok = checkdate(2,30,1962);



	// Funcion para revisar la edad;

function checkbirthdate($month,$day,$year) {
    $min_age = 18;
    $max_age = 122;
    if (! checkdate($month,$day,$year)) {
        return false;
    }
    $now = new DateTime();
    $then_formatted = sprintf("%d-%d-%d", $year, $month, $day);
    $then = DateTime::createFromFormat("Y-n-j|",$then_formatted);
    $age = $now->diff($then);
    if (($age->y < $min_age)|| ($age->y > $max_age)) {
        return FALSE;
    }
    else {
        return TRUE;
    }
}
// check December 3, 1974
if (checkbirthdate(12,3,1974)) {
    print "You may use this web site.";
} else {
    print "You are too young (or too old!!) to proceed.";
}


	



	



	



	



	



	



	



?>