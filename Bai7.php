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
            Nhập số nguyên n
        </label>
        <input id="number" type="text" name="number" />
        <br><br>
        <button type="submit">
            Kiểm tra số chẵn từ 0 đến n
        </button>
    </form>

    <?php
    echo "<br>";
    for($i = 0; $i <= $_POST['number']; $i++){
        $kt = $i % 2;
        if($kt == 0){
            echo "<pre>";
	 		echo $i; 
        }
    }
    ?>
</body>

</html>