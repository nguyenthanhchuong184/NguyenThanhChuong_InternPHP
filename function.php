<?php
	// $number = 12;

	// if (kt_so_chan($number)) 
	// {
	// 	echo "So chan";
	// } else {
	// 	echo "So le";
	// }

	// function kt_so_chan($number)
	// {
	// 	if($number % 2 == 0)
	// 		return true;
	// 		else return false;
	// }
	
	// $number = 11;

	// kt_chan_le($number);

	// function kt_chan_le($number){
	// 		if($number % 2 == 0){
	// 			echo "So chan";
	// 		} echo "So le";
			
	// }

	// $so1 = 12;
	// $so2 = 3;
	// echo tinhtong($so1, $so2);
	// function tinhtong($so1, $so2){
	// 	return $so1 + $so2;
	// }
	
	// $so1 = 3;
	// $so2 = 7;
	// $so3 = 5;

	// echo tinhtong($so1, $so2, $so3);

	// function tinhtong($a, $b, $c = false){
	// 	$tong = $a + $b;
	// 	if ($c != false) {
	// 		$tong = $tong + $c;
	// 	}
	// 	return $tong;
	// }

	//Bien toan cuc
	// $bien_toan_cuc = 12;

	// function kiem_tra(){
	// 	$bien_cuc_bo = 13;

	// 	global $bien_toan_cuc;//lay gia tri cua bien

	// 	if ($bien_cuc_bo % $bien_toan_cuc) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	//Bien tinh
	// function kiem_tra(){
	// 	static $a = 0;
	// 	$a++;
	// 	echo $a;
	// }
	// kiem_tra();
	// kiem_tra();

	// $a = 1;
	// function tang_len_1($a){
	// 	return $a + 1;
	// }
	// echo tang_len_1($a);
	// echo "\t";
	// echo $a;

	//Truyen-bang-tham-chieu
	// $a = 1;
	// function tang_len_1(&$a){
	// 	$a = $a + 1;
	// 	return $a;
	// }
	// echo tang_len_1($a);
	// echo "\t";
	// echo $a;

	//Goi ham
	function A(){
		B();
	}
	//callback
	function B(){
		C();
	}
	function C(){
		echo 'C';
	}
	A();
?>