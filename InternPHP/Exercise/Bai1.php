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
            Số tiền khách mua
        </label>
        <input id="number" type="text" name="number" />
        <br><br>
        <button type="submit">
            Tiền cần trả
        </button>
    </form>

    <?php
    echo "<br>";
    if ($_POST["number"] >= 200 && $_POST["number"] < 300) {
        echo 'Số tiền cần trả là: ' . $_POST["number"] * 0.8;
    } elseif ($_POST["number"] > 300) {
        echo 'Số tiền cần trả là: ' . $_POST["number"] * 0.7;
    } else {
        echo "Không khuyến mãi!";
    }
    ?>
</body>

</html>