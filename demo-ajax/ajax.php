<html>
<head>
	<title>Sử dung Ajax trong PHP</title>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<meta charset="UTF-8">
</head>
<body>
	<form id="fr_form" name="fr_form">
		<table width="50%">
			<tr><td>Tên đăng nhập<td><td><input type="text" name="username"></td></tr>
			<tr><td>Mật mã<td><td><input type="password" name="password"></td></tr>
			<tr><td>Địa chỉ email<td><td><input type="text" name="email"></td></tr>
			<tr>
				<td>Giới tính<td>
				<td>
					<input type="radio" name="sex" value="male">Nam <input type="radio" name="sex" value="female">Nữ
				</td>
			</tr>
			<tr>
				<td>Tuổi<td>
				<td>
					<select name="age">
						<?php for ($age=10; $age <= 150 ; $age++) { ?>
							<option value="<?php echo $age; ?>"> <?php echo $age; ?> </option>
						<?php } ?>
						
					</select>
				</td>
			</tr>
			<tr><td>Ngày sinh<td><td><input type="text" name="birthday"></td></tr>
			<tr><td>&nbsp;<td><td><input type="button" id="btn_register" name="btn_register" value="Đăng ký"></td></tr>
		</table>	
	</form>
	<script type="text/javascript">
		$("#btn_register").click(function(){
			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "show_data.php",// gọi đến file server show_data.php để xử lý
				data: $("#fr_form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){//kết quả trả về từ server nếu gửi thành công
					console.log(response);
				}
			});
		});
		
</script>
</body>
</html>