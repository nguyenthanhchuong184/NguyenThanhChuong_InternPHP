<?php
	// if ($_POST["number"] % 7 == 0) {
	// 	echo 'So '.$_POST["number"].'chia het cho 7';
	// } else {
	// 	echo 'So '.$_POST["number"].' khong chia het cho 7';
	// }

	$number = 14;

	switch ($number) {
		case $number%7 ==0:
			echo 'Number chia het cho 7';
			break;
		default:
			echo 'Number khong chia het cho 7';
			break;
	}
	
?>