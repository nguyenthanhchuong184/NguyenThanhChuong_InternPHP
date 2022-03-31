<?php
	// for ($i = 0; $i < 10; $i++){
 //    echo $i . ' - ';
	// }

	// for ($i = 9; $i >= 0; $i--){
 //    echo $i . ' - ';
	// }

	// for ($i = 9, $count = 10; $i <= $count; $i--){
	// 	echo $i . ' - ';
	// }

	// for ($i = 1; $i < 10; $i++)
	// {
	//     for ($j = 9; $j >= $i; $j--)
	//     {
	//         echo $j;
	//     }
	// echo '<br/>';;
	// }

		// $sinhvien = array(
		// 'Nguyễn A',
		// 'Nguyễn B',
		// 'Nguyễn C',
		// 'Nguyễn D',
		// 'Nguyễn E',
		// 'Nguyễn F'
		// );
		// $count = count($sinhvien);
		// for($i = 0; $i < $count; $i++){
		// 	echo "<pre>";
		// 	echo $sinhvien[$i];
		// }
	
	//Bai1
	// for($i = 0; $i < 101; $i++){
	// 	$kt = $i % 2;
	// 	if ($kt == 0) {
	// 		echo "<pre>";
	// 		echo $i;
	// 	} 
	// }
	
	//Bai2
	// $array = [
	// 	1, 23, 32, 5, 43, 321, 312, 352, 2, 13, 153, 21, 32, 1];

	// $max = null;
	// $vi_tri = null;
	// $count = count($array);

	// for($i=0; $i < $count; $i++){
	// 	if($max == null){
	// 		$max = $array[$i];
	// 		$vi_tri = $i;

	// 	}else{
	// 		if($array[$i] > $max){
	// 			$max = $array[$i];
	// 			$vi_tri = $i;
	// 		}
	// 	}
	// }
	// echo "Giá trị lớn nhất là $max, nằm tại vị trí $vi_tri";

	//Bai3
	// $name = "Nguyen Van Cuong";
	// $strlen = strlen($name);
	// for ($i=0 ; $i < $strlen ; $i++ ) { 
	// 	echo "<pre>";
	// 	echo $name[$i];
	// }

	//Bai4
	// $s = 0;
	// for ($i=1; $i < 10; $i++) { 
	// 	$s += 1/$i; 
	// }
	// echo $s;
	
	//Bai5
	// $s = 0;
	// $x = 1;
	// $n = 10;
	// for ($i=0; $i < $n ; $i++) { 
	// 	$s += $x*2*$n;
	// }
	// echo $s;

	//Bai6
	// $min = 1;
	// $max = 100;
	// for ($i=$min; $i < $max; $i+=2) { 
	// 	echo $i;
	// 	echo "\t";
	// }
	$student = array(
		array(
			'name' => 'Nguyễn Văn Cường 1',
			'email' => 'gmail1@gmail.com',
			'age' => '1'
		),
		array(
			'name' => 'Nguyễn Văn Cường 2',
			'email' => 'gmail1@gmail.com',
			'age' => '2'
		),
		array(
			'name' => 'Nguyễn Văn Cường 3',
			'email' => 'gmail1@gmail.com',
			'age' => '3'
		),
		array(
			'name' => 'Nguyễn Văn Cường 4',
			'email' => 'gmail1@gmail.com',
			'age' => '4'
		),
		array(
			'name' => 'Nguyễn Văn Cường 5',
			'email' => 'gmail1@gmail.com',
			'age' => '5'
		),
		array(
			'name' => 'Nguyễn Văn Cường 6',
			'email' => 'gmail1@gmail.com',
			'age' => '6'
		),
	);
?>
<table>
	<?php
		foreach ($student as $value) {
		//for ($i=0; $i < count($student); $i++) { 
	?>
		<tr>
			<td><?php echo $value['name'];?></td>
			<td><?php echo $value['email'];?></td>
			<td><?php echo $value['age'];?></td>
		</tr>
	<?php
		}
	?>
</table>

<head>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
	</style>
</head>