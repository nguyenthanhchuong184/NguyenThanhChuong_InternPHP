<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	include 'connect.php';
	$data = $_POST;
	$errors = [];
	$kq = "";
	$err_ten = "";
	$err_tuoi = "";
	$err_quoctich = "";
	$err_vitri = "";
	$err_luong = "";

	if(isset($_POST['post'])) {
		$demo = true;
        $ten = $_POST['TENCAUTHU'];
        $tuoi = $_POST['TUOI'];
        $quoctich = $_POST['QUOCTICH'];
        $vitri = $_POST['VITRI'];
        $luong = $_POST['LUONG'];

		if(empty($_POST['TENCAUTHU'])) {
            $err_ten = "vui long nhap ten";
            $demo = false;
        }
        if(empty($_POST['TUOI'])) {
            $err_tuoi = "vui long nhap tuoi";
            $demo = false;
        }
        if(empty($_POST['QUOCTICH'])) {
            $err_quoctich = "vui long nhap quoctich";
            $demo = false;
        }
        if(empty($_POST['VITRI'])) {
            $err_vitri = "vui long nhap vitri";
            $demo = false;
        }
        if(empty($_POST['LUONG'])) {
            $err_luong = "vui long nhap luong";
            $demo = false;
        }
		if ($_POST['TENCAUTHU'] != '' && 
            $_POST['TUOI'] != '' && 
            $_POST['QUOCTICH'] != '' && 
            $_POST['VITRI'] != '' && 
            $_POST['LUONG'] != '')  
		{	
				//Thêm mới cầu thủ
			    //Viết câu SQL lấy tất cả dữ liệu trong bảng qlcauthu
			$sql = "INSERT INTO qlcauthu 
			(TENCAUTHU, TUOI, QUOCTICH, VITRI, LUONG) 
			VALUES ('".$data['TENCAUTHU']."',
			'".$data['TUOI']."',
			'".$data['QUOCTICH']."',
			'".$data['VITRI']."',
			'".$data['LUONG']."');";
	            //Chạy câu SQL
			if ($result = $con->query($sql)) {
				echo "<h1>Thêm mới cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
			}else{
				echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
			}
		}
	}
?>
	<h2>ADD CAU THU</h2>
	<form id= "up" action="" method="POST" enctype="multipart/form-data">
		<label for="fname">Ten cau thu:</label>
		<input id="up_ten" type="text" id="fname" name="TENCAUTHU" value="">

		<p><?php echo $err_ten;?></p>
		<br>

		<label for="lname">Tuoi:</label>
		<input id="up_tuoi" type="text" id="lname" name="TUOI" value="">

		<p><?php echo $err_tuoi;?></p>
		<br>

		<label for="fname">Quoc tich:</label>
		<input id="up_quoctich" type="text" id="fname" name="QUOCTICH" value="">

		<p><?php echo $err_quoctich;?></p>
		<br>
		<label for="fname">Vi tri:</label>
		<input id="up_vitri" type="text" id="fname" name="VITRI" value="">

		<p><?php echo $err_vitri;?></p>
		<br>
		<label for="fname">Luong:</label>
		<input id="up_luong" type="text" id="fname" name="LUONG" value="">

		<p><?php echo $err_luong;?></p>
		<br>
		<input type="submit" name="post" value="Them moi">
		<p><?php echo $kq;?></p>
	</form> 
</body>
</html>