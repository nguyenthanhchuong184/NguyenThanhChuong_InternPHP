<?php

	// for($i=0;$i<=10;$i++){
	// 	echo $i. ' - ';
	// }

	// $i = 1;
	// while ($i <= 10) {
	// 	echo $i . ' - ';
	// 	$i++;
	// }

	// $i=0;
	// $j=10;
	// while ( $i < 10 && $j > 5) {
	// 	$i++;
	// 	$j -= 2;
	// }
	// echo $i;
	// echo "\t";
	// echo $j;
	
	// $i=0;
	// do {
	// 	echo $i;
	// 	$i++;
	// 	echo "\t";
	// } while ($i <= 10); //kq 0 toi 10

	// $i=1;
	// do {
	// 	echo $i;
	// 	$i++;
	// 	echo "\t";
	// } while ($i < 1); //chi lap 1 lan do $i < 1

	$nam = array(
		1990,
		1991,
		1992,
		1993,
		1994
	);
	// echo $nam[0];
	// echo $nam[1];
	// echo $nam[2];
	// echo $nam[3];
	// echo $nam[4];

	// $i = 0;
	// while ($i <= 4) {
	// 	echo $nam[$i];
	// 	echo "<pre>";
	// 	$i++;
	// }

	$i=0;
	do {
		echo "<pre>";
		echo $nam[$i];
		$i++;
	} while ( $i <= 4);


	


?>
