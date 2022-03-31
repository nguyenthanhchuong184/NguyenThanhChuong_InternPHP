<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$kq = "";
	$err_toan="";
	$err_ly="";
	$err_hoa="";

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
		if ($demo) 
		{
			$td = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'];

			if ($_POST['toan'] == 0 ||
				$_POST['ly'] == 0 ||
				$_POST['hoa'] == 0  ) {
				$kq='Rot';
			} else {
				if ($td >= 15) {
					$kq='Dau';
				}
				else{
					$kq='Rot';
				}
			}
		} 
	}
	?>
	<form action="" method="POST">
		<label>
			Toan
		</label>
		<input  type="text" name="toan" />
		<p><?php echo $err_toan;?></p>
		<br><br>
		<label>
			Ly 
		</label>
		<input type="text" name="ly" />
		<p><?php echo $err_ly;?></p>
		<br><br>
		<label>
			Hoa
		</label>
		<input type="text" name="hoa" />
		<p><?php echo $err_hoa;?></p>
		<br><br>
		<button type="submit" name="submit">
			Send
		</button>
		<p><?php echo $kq;?></p>
	</form>
</body>
</html>