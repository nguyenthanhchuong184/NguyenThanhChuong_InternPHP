<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php 
		$kq = "";
		$err_email="";
		$err_pass="";
		function is_email($str) {
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	if(isset($_POST['post'])) {
		$demo = true;
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		if(empty($_POST['email'])) {
			$err_email = "vui long nhap emal";
			$demo = false;
		}elseif (!is_email($_POST['email'])) {
			$err_email = "email chua dung dinh dang";
			$demo = false;
		} 
		if(empty($_POST['pass'])) {
			$err_pass = "vui long nhap pass";
			$demo = false;
		}
		if($demo) {
			if ($_SESSION['email'] == $_POST['email'] &&$_SESSION['pass'] == $_POST['pass']) {
				$kq = 'Dang nhap thanh cong';
			} else $kq ='Dang nhap that bai';
		}
	}
	?>
	<h2>Login</h2>
	<form id= "up" action="" method="POST" enctype="multipart/form-data">
		<label for="fname">Email:</label><br>
		<input id="up_email" type="text" id="fname" name="email" value="">
		<p><?php echo $err_email;?></p>
		<br>
		<label for="lname">Pass:</label><br>
		<input id="up_pass" type="text" id="lname" name="pass" value="">
		<p><?php echo $err_pass;?></p>
		<br><br>
		<input type="submit" name="post" value="Submit">
		<p><?php echo $kq;?></p>
	</form> 
</body>
</html>