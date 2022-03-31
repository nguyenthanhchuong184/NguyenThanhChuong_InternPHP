<?php session_start(); 
	//Click de luu session
	if(isset($_POST['save-session'])){
		//Luu session
		$_SESSION['name'] = $_POST['username'];
    echo $_SESSION['name'];
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <h1>
       		<?php
       			//Hien thi thong tin luu trong session
       			//kiem tra co ton tai truoc khi hien thi no ra
       			if (isset($_SESSION['name'])) {
       				echo 'Ten dang nhap la: '.$_SESSION['name'];
       			}
       		?>
       </h1>
       <form method="POST" action="">
       		<input type="text" name="username" value=""/><br/>
       		<input type="submit" name="save-session" value="Save session"/><br/>
       </form>
    </body>
</html>
<!-- Xoa session
unset($_SESSTION['name']);
Xoa het session
session_destroy(); -->