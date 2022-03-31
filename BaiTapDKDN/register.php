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
	include 'connect.php';
	$kq = "";
	$err_email="";
	$err_pass="";
	$err_username="";
	$err_avatar="";
	function is_email($str) {
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	if(isset($_POST['submit'])) {
		$demo = true;
		$email = $_POST['E'];
		$pass = $_POST['pass'];
		$username = $_POST['username'];
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
		if(empty($_POST['username'])) {
			$err_username = "vui long nhap username";
			$demo = false;
		}
		
			if (!empty($_FILES['avatar']['name']))
			{
					if ($_FILES['avatar']['error'] > 0)
					{
						$err_avatar = 'File Upload Bị Lỗi';
					}
					else{
						if ($_FILES['avatar']['size'] > 1048576 ) {
							$err_avatar = 'FIle Upload Lớn hơn 1mb.';
						}
						$mang_tam = explode('.', $_FILES['avatar']['name']); 
						$kt = array('jpg','png','jpeg','JPG','PNG','JPEG');
						foreach ($mang_tam as $value) 
						{
							if (in_array($value, $kt))
							{
								move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name']);
								$err_avatar = 'File Uploaded';
								break;
							}else
							{
								$err_avatar =  "File khong dung dinh dang";
							}
						}
					}
			} else {
				$err_avatar = "vui long nhap avatar";
			}

			if ($demo == true) {
				
			} 
	}
	?>
	<h2>Register</h2>
	<form id= "up" action="" method="POST" enctype="multipart/form-data">
		<label for="fname">Email:</label><br>
		<input id="up_email" type="text" id="fname" name="email" value="">

		<p><?php echo $err_email;?></p>
		<br>

		<label for="lname">Pass:</label><br>
		<input id="up_pass" type="text" id="lname" name="pass" value="">

		<p><?php echo $err_pass;?></p>
		<br><br>

		<label for="lname">Username:</label><br>
		<input id="up_username" type="text" id="lname" name="username" value="">

		<p><?php echo $err_username;?></p>
		<br><br>

		<label for="lname">Avatar:</label><br>
		<input id="up_avatar" type="file" name="avatar"/ >
		
		<p><?php echo $err_avatar;?></p>
		<br><br>

		<input type="submit" name="submit" value="Submit">
		<p><?php echo $kq;?></p>
	</form> 
	
</body>
</html>