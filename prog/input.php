<?php

	/*
	Küsib ja arvutab.
	*/

	//Konstandid
	define('PII', 3.14);


	echo "Palun sisesta ringi raadius (cm):";
	//Muutujad
	$radius = fgets(STDIN); //Küsi käsureal ja salvesta muutujasse
	$area = PII * pow($radius, 2);
	$circumference = 2 * PII * $radius;

	echo "Ringi pindala on: $area cm2 \n";
	echo "Ringi umbermoot on: $circumference cm \n";
	echo "Ringi diameeter on: " . 2 * $radius . ' cm' . "\n";
?>