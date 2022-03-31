<?php
	//echo "welcome to php";
	// $a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
	// $b = 123; // Biến $b là kiểu INT có giá trị bằng 123
	// $c = $a + $b;
	// var_dump(is_int($c));
	
	// $sinhvien = array('Nguyen Van A' => 0,'Nguyen Van B' => 1);
	// var_dump($sinhvien);
	
	// $sinhvien = array();
	// $sinhvien[0] = 'Nguyễn Văn A';
	// $sinhvien[1] = 'Nguyễn Văn B';
	// //var_dump($sinhvien);
	// echo $sinhvien[0];
	
	//Mang nhieu chieu
	// $a = array();
	// $a[0][1] = 123;
	// $a[0][2] = 345;
	// echo $a[0][2]; //kq: 345
	
	//Bieu thuc
	//$a: toan hang
	// +: toan tu
	// $a = 123;
	// $b = 456;

	// $tong = $a + $b;
	// echo $tong;
	
	//toan tu gan
	// $a = $b = $c = 10;
	
	//
	// $a = 5;
	// $b = 10;

	// $tinh = $a + $b/2;
	// echo $tinh;

	// $so_kt = 10;
	// $so_du = $so_kt % 2;

	// if ($so_du ==0) {
	// 	echo 'So '.$so_kt.' la so chan';
	// }else{
	// 	echo 'So '.$so_kt.' la so le';
	// } 

	// $year = 1999;
	// $kt = ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0);
	// if($kt == true){
	// 	echo 'Nam '.$year.' La nam nhuan';
	// }echo 'Nam '.$year.' La nam khong nhuan';

	// $year = 2020;
	// $so_du = $year % 2;
	// if ($so_du==0) {
	// 	echo 'Nam '.$year.' La nam chan';
	// } else {
	// 	echo 'Nam '.$year.' La nam le';
	// }

	// $color = 'red';
	// if ($color == 'red') {
	// 	echo 'Day la mau do';
	// } else  if($color == 'blue') {
	// 	echo 'Day la mau xanh';
	// }else  if($color == 'yellow') {
	// 	echo 'Day la mau vang';
	// }else{
	// 	echo 'Day la mau khac';
	// }

	// $so = 80; 
	// if ($so % 2 == 0) 
	// {
	// 	if ($so > 100){ 
	// 		echo 'Số chẵn và lớn hơn 100';
	// 	}
	// 	else if ($so < 100){ 
	// 		echo 'Số chẵn và nhỏ hơn 100';
	// 	}
	// }

	// if ($_POST["number"] % 7 == 0) {
	// 	echo 'So '.$_POST["number"].'chia het cho 7';
	// } else {
	// 	echo 'So '.$_POST["number"].' khong chia het cho 7';
	// }

	// echo $_GET['toan'];
 	// echo $_POST['toan']
	
	// echo "<pre>";
	// var_dump($_REQUEST['toan'])
	// $err_toan = "";
	// if(isset($_POST['submit'])) {
	// 	if(empty($_POST['toan'])) {
	// 		$err_toan = "vui long nhap d toan";
	// 	}
	// } else {
	// 	echo "chua click form";
	// }
// <!-- - get va post deu truyen data tới 1 file nao do(file do dc goi trog action)
// - get hien thi data ng dung len url
// - post k hien thi ma truyen ngầm ben dưới

// - get k bao mat
// - post bao mat. -->

// <!-- - co 3 cach de laydata trong form: get, post va request -->

// <!-- isset: ham nay dung de kiem tra 1 bien co ton tai k?
// empty: kiem tra 1 bien co data k? -->
// <!-- .submit form -->
		
		
	// if ($_POST['toan']||$_POST['ly']||$_POST['hoa']||$_POST['tienganh']||$_POST['van']||$_POST['lichsu'] < 4 ) {
		// 	echo $thongbao = 'Xep loai yeu';

		// } else if($dtb > 7.9) {
		// 	echo $thongbao = 'Xep loai gioi';
		// } else if($dtb < 8) {
		// 	echo $thongbao = 'Xep loai kha';
		// } else if($dtb < 6.5) {
		// 	echo $thongbao = 'Xep loai tb';
		// } else if($dtb < 5) {
		// 	echo $thongbao = 'Xep loai yeu';
		// }
		// $number = 1;
		// switch ($number)
		// {
		// 	case 0 :
		// 	echo 'Số không';
		// 	break;
		// 	case 1:
		// 	echo 'Số một';
		// 	break;
		// 	case 2:
		// 	echo 'Số hai';
		// 	break;
		// 	case 3:
		// 	echo 'Số ba';
		// 	break;
		// 	case 4 :
		// 	echo 'Số bốn';
		// 	break;
		// 	default:
		// 	echo 'Không tìm thấy';
		// 	break;
		// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- <form action="" method="post">
	Toán:<input type="text" name="toan" value="">
	<p><?php echo $err_toan;?></p>
	Lý	:<input type="text" name="ly" value=""> -->
	<!-- <p><?php echo $ly;?></p>
	Hoá: <input type="text" name="hoa" value="<?php echo $p_hoa; ?>">
	<p><?php echo $hoa;?></p> -->
	<!-- <button type="submit" name="submit">send</button> 
</form> -->
</body>
</html>