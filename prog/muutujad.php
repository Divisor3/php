<?php

	/*
	Programm arvutab ringi pindala ja ümbermõõdu
	*/

	//Konstandid
	define('PII', 3.14);

	//Muutujad
	$radius = 25; //cm
	$area = PII * pow($radius, 2);
	$circumference = 2 * PII * $radius;

	echo 'Ringi pindala on: ' . $area . ' cm2' . "\n";
	echo 'Ringi umbermoot on: ' . $circumference . ' cm' . "\n";

	echo "Ringi pindala on: $area cm2 \n";
	echo "Ringi umbermoot on: $circumference cm";
?>