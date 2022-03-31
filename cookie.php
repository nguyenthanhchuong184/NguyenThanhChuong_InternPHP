<?php
	setcookie('username','thehalfheart',time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
	<?php
		//Lay gia tri cookie
		if (isset($_COOKIE['username'])) 
		{
			echo $_COOKIE['username'];
		}
		//Xoa cookie
		setcookie("username","",time() - 3600);
	?>
</body>
</html>
		<!-- Lưu trữ Cookie
		Để lưu trữ Cookie ta dùng cú pháp sau và phải đặt trước thẻ html: setcookie($name, $value, $expire, $path, $domain).
		Trong đó:
		$name: là tên của Cookie
		$value: giá trị của Cookie
		$expire: thời gian sống của Cookie
		$path : đường dẫn lưu trữ Cookie
		$domain: tên của domain
 -->