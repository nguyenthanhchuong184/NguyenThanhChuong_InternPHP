<?php
if (isset($_POST["username"])) {// kiểm tra nếu người dùng đã ấn nút Đăng ký để gửi thông tin

	$username = $_POST["username"]; // lấy thông tin username

	$password = $_POST["password"]; // lấy thông tin password

	$email = $_POST["email"]; // lấy thông tin email

	$sex = $_POST["sex"]; // lấy thông tin sex

	$age = $_POST["age"]; // lấy thông tin age

	$birthday = $_POST["birthday"]; // lấy thông tin birthday

	echo $username . " | " .$password . " | " .$email . " | " .$sex . " | " .$age . " | " .$birthday ; 
	// xuất dữ liệu lấy được ra cho phía server
	
	//Dưới đây sẽ là những đoạn code xử lý data theo ý bạn
	//Chẳng hạn như lưu data xuống database, kiểm tra data,...
}
?>
<?php
						
						include 'connect.php';

						$sql = "SELECT * FROM `product` ORDER BY `id`";

						$result = $con->query($sql);

						$data = [];
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								$data[] = $row;
							}
						}
						foreach ($data as $value) {
							$id = $value['id'];
							$title = $value['title'];
							$price = $value['price'];
							$img = $value['image'];
							$qty = 1;
							$product = array(
								'id' => $id,
								'title' =>  $title,
								'price' => $price,
								'img' => $img,
								'qty' => $qty);

							$_SESSION['cart'][$id] = $product;

							echo "<pre>";
							var_dump($_SESSION['cart'][$id]);
							echo "</pre>";
						}

						?>
co id 
viet cau lenh  sql de lay all thong tin thang product co id

=> tao arr => ss