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
            Số nguyên n bất kì
        </label>
        <input id="number" type="text" name="number" />
        <br><br>
        <button type="submit">
            Tính tổng: 1/3 + 2/6 + 3/9 + …. +n/j
        </button>
    </form>

    <?php
    echo "<br>";
    $tong = 0;
    $j = 3;
    for ($i = 1; $i <= $_POST["number"]; $i++) {
        $tong = $tong + $i / $j;
        $j += 3;
    }
    echo $tong;
    ?>
</body>

</html>