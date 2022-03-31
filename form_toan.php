<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<form action="" method="POST">
		<label>
			Number
		</label>
		<input id="number" type="text" name="number" />
		<br><br>
		<button type="submit">
			Submit
		</button>
	</form>

	<?php
	echo "<br>";
	if ($_POST["number"] % 7 == 0) {
		echo 'So ' . $_POST["number"] . 'chia het cho 7';
	} else {
		echo 'So ' . $_POST["number"] . ' khong chia het cho 7';
	}
	?>
</body>

</html>