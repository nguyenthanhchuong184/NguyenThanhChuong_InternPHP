<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta chttp-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
    if (!$_SESSION['arMuaHoa']) {
        header('location:muahoa.php');
    }

    ?>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
        </tr>

        <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            // echo "$value <br>";
        }
        ?>

        <?php $tongTien = 0;
        foreach ($_SESSION['arMuaHoa'] as $hoa) {
            $thanhTien = $hoa['gia'] * $hoa['soluong'];
            $tongTien += $thanhTien;
            $name = $hoa['tenhoa'];
            $quantity = $hoa['soluong'];

            echo "
                <tr>
                    <th>$name</th>
                    <th>$quantity</th>
                    <th> $thanhTien</th>
                    <th>$tongTien</th>
                </tr>
            ";
        }
        ?>

    </table>
</body>

</html>

<?php
ob_end_flush();
//session_destroy();

?>