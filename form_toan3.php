<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$thongbao = "";
		$err_toan="";
		$err_ly="";
		$err_hoa="";
		$err_tienganh="";
		$err_van="";
		$err_lichsu="";
		if(isset($_POST['submit'])) {
			$demo = true;
			if(empty($_POST['toan'])) {
				$err_toan = "vui long nhap diem toan";
				$demo = false;
			}
			if(empty($_POST['ly'])) {
				$err_ly = "vui long nhap diem ly";
				$demo = false;
			}
			if(empty($_POST['hoa'])) {
				$err_hoa = "vui long nhap diem hoa";
				$demo = false;
			}
			if(empty($_POST['tienganh'])) {
				$err_tienganh = "vui long nhap diem tienganh";
				$demo = false;
			}
			if(empty($_POST['van'])) {
				$err_van = "vui long nhap diem van";	
				$demo = false;
			}
			if(empty($_POST['lichsu'])) {
				$err_lichsu = "vui long nhap diem lich su";
				$demo = false;
			}
			if ($demo = true) 
			{
				$dtb = (
				$_POST['toan'] + 
				$_POST['ly'] +
				$_POST['hoa'] +
				$_POST['tienganh'] + 
				$_POST['van'] + 
				$_POST['lichsu'])/6;

			if ($_POST['toan'] < 4 ||
				$_POST['ly'] < 4 ||
				$_POST['hoa'] < 4 ||
				$_POST['tienganh'] < 4|| 
				$_POST['van'] < 4||
				$_POST['lichsu'] < 4 ) {
				$thongbao = 'Xep loai yeu';
			} else{
				if($dtb > 7.9) {
					$thongbao = 'Xep loai gioi';
				}
				if ($dtb < 8) {
					$thongbao = 'Xep loai kha';
				} 
				if ($dtb < 6.5) {
					$thongbao = 'Xep loai tb';
				} 
				if ($dtb < 5) {
					$thongbao = 'Xep loai yeu';
				}
			}
		} 
	}
	?>
	<form action="" method="POST">
		Toán:<input type="text" name="toan" value="">
		<p><?php echo $err_toan;?></p>
		Lý:<input type="text" name="ly" value="">
		<p><?php echo $err_ly;?></p>
		Hoa:<input type="text" name="hoa" value="">
		<p><?php echo $err_hoa;?></p>
		Tieng Anh:<input type="text" name="tienganh" value="">
		<p><?php echo $err_tienganh;?></p>
		Van:<input type="text" name="van" value="">
		<p><?php echo $err_van;?></p>
		Lich su:<input type="text" name="lichsu" value="">
		<p><?php echo $err_lichsu;?></p>
		<button type="submit" name="submit">send</button> 
		<p><?php echo $thongbao;?></p>
	</form>
</body>
</html>