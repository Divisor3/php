<?php

	/*
	Küsib ja arvutab.
	*/

	//Konstandid
	define('PII', 3.14);

	while (true){

		echo "Palun sisesta ringi raadius (mm, cm, dm, m, km): "; // Küsib
		$radius = trim(fgets(STDIN)); //Küsi käsureal ja salvesta muutujasse

		if (strpos($radius, 'mm') !== false) {

			$radius_in_cm = floatval($radius) / 10;

		} elseif (strpos($radius, 'cm') !== false) {

			$radius_in_cm = floatval($radius);

		} elseif (strpos($radius, 'dm') !== false) {

			$radius_in_cm = floatval($radius) * 10;
			
		} elseif (strpos($radius, 'km') !== false) {

			$radius_in_cm = floatval($radius) * 100 * 1000;
			
		} elseif (strpos($radius, 'm') !== false) {

			$radius_in_cm = floatval($radius) * 100;
			
		} else {

			$radius_in_cm = floatval($radius);

		}
		
		if(is_numeric($radius_in_cm)) {

			$area = PII * pow($radius_in_cm, 2);
			$circumference = 2 * PII * $radius_in_cm;

			echo "Ringi pindala on: $area cm2 \n";
			echo "Ringi umbermoot on: $circumference cm \n";
			echo "Ringi diameeter on: " . 2 * $radius_in_cm . ' cm' . "\n";

		} else {
			echo "Vale! \n";
		}

	} 
?>