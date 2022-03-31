
<?php
	//bai1
	// $mang = array(321,312,5,34,5,45,56,5,7,6,787,8,7,2);
	// $kq = 'Khong ton tai';
	// foreach ($mang as $value) {
	// 	if ($value == 7) {
	// 		$kq = 'Co ton tai';
	// 		break;
	// 	};
	// }
	// echo $kq;

	//
 //    			Object.keys(dataCart).map(function(key, index){
 //    				///tang qty
 //    				if(id == key){
 //    					dataCart[key]['qty'] += 1;
 //    					tB = 0;
 //    				}
 //    			})
 //    			///add moi
 //    			if(tB == 1){
 //    				dataCart[id] = data;
 //    			}
	// //bai2
	// $a = array();

	// for ($i=1; $i <= 100 ; $i++) {
	// 	array_push($a, $i);
	// }

	// foreach ($a as $key => $value) {
	// 	if ($value % 3 == 0) {
	// 		echo $value;
	// 		echo ' - ';
	// 	};
	// }
	// BAI3
	$mang = array();
	$a = 3;
	$b = 7;
	$c = 5;
	array_push($mang, $a, $b, $c);
	
	$max = $mang[0];

	foreach ($mang as $value) {
		if ($max < $value) {
			$max = $value;
		}
	}

	echo $max;
	
	//bai4
	// $a = array();

	// for ($i=1; $i <= 1000 ; $i++) {
	// 	array_push($a, $i);
	// }

	// foreach ($a as  $value) {
	// 	if ($value % 40 == 0) {
	// 		echo $value;
	// 		echo ' - ';
	// 	};
	// }
	
	// $array_keys = array('a','b','c');
	// $array_values = array('one', 'two', 'three');
	// print_r(array_combine($array_keys, $array_values));

	// $array1 = array('php' => "laravel" ,
	// 				'css', 'html' );

	// $array2 = array('php' => 'zend' ,
	// 				'python', 'js' => 'nodejs');

	// $result = array_merge($array1,$array2);
	// echo "<pre>";
	// 	print_r($result);
	// echo "</pre>";
	
	// //Bai13: 1
	// $mang = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");
	// asort($mang);
	// echo "1. Sap xep tang dan theo Value:";
	// echo "<br>";
	// foreach ($mang as $x => $x_value) {
	// 	echo "Tuoi cua ".$x. " la: ".$x_value;
	// 	echo "<br>";
	// }
	// echo "<br>";
	// echo "2. Sap xep tang dan theo key:";
	// echo "<br>";
	// ksort($mang);
	// foreach ($mang as $x => $x_value) {
	// 	echo "Tuoi cua ".$x. " la: ".$x_value;
	// 	echo "<br>";
	// }
	// echo "<br>";
	// arsort($mang);
	// echo "3. Sap xep giam dan theo Value:";
	// echo "<br>";
	// foreach ($mang as $x => $x_value) {
	// 	echo "Tuoi cua ".$x. " la: ".$x_value;
	// 	echo "<br>";
	// }
	// echo "<br>";
	// echo "4. Sap xep giam dan theo key:";
	// echo "<br>";
	// krsort($mang);
	// foreach ($mang as $x => $x_value) {
	// 	echo "Tuoi cua ".$x. " la: ".$x_value;
	// 	echo "<br>";
	// }

	// bai 2
	// $mang = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	// echo "Mang ban dau:";
	// var_dump($mang);
	// echo "<br>";
	// echo "Cac gia tri o dang chu thuong:";
	// $mang = array_map('strtolower', $mang);
	// var_dump($mang);
	// echo "<br>";
	// echo "Cac gia tri o dang chu hoa:";
	// $mang = array_map('strtoupper', $mang);
	// var_dump($mang);

	//bai 3
	// $mang_so_nguyen = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
	// 	68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";  
	// $mang_tam = explode(',', $mang_so_nguyen);  
	// $tong_gia_tri = 0;  
	// $do_dai_mang = count($mang_tam);  
	// foreach($mang_tam as $gia_tri)  
	// 	{  
	// 	  $tong_gia_tri += $gia_tri;  
	// 	}  
	// $gia_tri_trung_binh = $tong_gia_tri/$do_dai_mang;  
	// echo "Giá trị trung bình: ".$gia_tri_trung_binh."";   
	// sort($mang_tam);  
	// echo "<br>Liệt kê 5 số nguyên nhỏ nhất: ";  
	// 	for ($i=0; $i < 5; $i++)  
	// 	{   
	// 	  echo $mang_tam[$i].", ";  
	// 	}  
	// 	echo "<br>Liệt kê 5 số nguyên lớn nhất: ";  
	// 	for ($i=($do_dai_mang-5); $i < ($do_dai_mang); $i++)  
	// 	{  
	// 	  echo $mang_tam[$i].", ";  
	// 	}
?>

