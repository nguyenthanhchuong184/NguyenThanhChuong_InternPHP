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
            Số nguyên bất kì
        </label>
        <input id="number" type="text" name="number" />
        <br><br>
        <button type="submit">
            Tổng các số lẻ trong nó
        </button>
    </form>

    <?php
    echo "<br>";
    $tong = 0;
    while ($_POST["number"] != 0) {
        $x = $_POST["number"] % 10; //tách từng chữ số
        if ($x % 2 != 0) {
            $tong = $tong + $x;
        }
        $_POST["number"] = $_POST["number"] / 10; //loại bỏ số vừa tách để tiếp tục lặp
    }
    echo $tong;
    ?>
</body>

</html>