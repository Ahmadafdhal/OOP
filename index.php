<?php
	require_once 'animal.php';
	require_once 'ape.php';
	require_once 'frog.php';

	$sheep = new Animal("shaun");


	echo $sheep->get_name();
	echo "<br>"; // "shaun"
	echo $sheep->legs;
	echo "<br>"; // 2
	echo $sheep->cold_blooded; // false
	echo "<br>";

	$sungokong = new Ape("kera sakti");
	echo $sungokong->get_name();
	echo "<br>";
	echo $sungokong->get_yell(); // "Auooo"
	echo "<br>";

	$kodok = new Frog("buduk");
	echo $kodok->get_name();
	echo "<br>";
	echo $kodok->get_jump(); // "hop hop"
	echo "<br>";
	echo $kodok->get_leg();



?>  