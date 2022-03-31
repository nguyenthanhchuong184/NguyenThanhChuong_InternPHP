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
            Tháng
        </label>
        <input id="number" type="text" name="number" />
        <br><br>
        <button type="submit">
            Số ngày trong tháng
        </button>
    </form>

    <?php
    echo "<br>";
    switch ($_POST["number"]) {
        case "1":
        case "3":
        case "5":
        case "7":
        case "8":
        case "10":
        case "12":
            echo "Có 31 ngày";
            break;
        case "2":
            echo "Có 28 or 29 ngày";
            break;
        case "4":
        case "6":
        case "9":
        case "11":
            echo "Có 30 ngày";
            break;
        default:
            echo "Điền không đúng số tháng";
    }
    ?>
</body>

</html>