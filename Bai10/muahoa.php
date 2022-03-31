<?php session_start();
ob_start();
if (isset($_POST['save-session'])) {
    $id = $_POST['id'];
    $tenhoa = $_POST['tenhoa'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    if (!isset($_SESSION['arMuaHoa'][$id])) {
        $_SESSION['arMuaHoa'][$id] =  array(
            'tenhoa' => $tenhoa,
            'soluong' => $soluong,
            'gia' => $gia
        );
    } else {
        $_SESSION['arMuaHoa'][$id]['soluong'] += $soluong;
    }
    header('locaition:giohoa.php');
    var_dump($_SESSION['arMuaHoa']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta chttp-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" style="width: 400px; height: 300px;">
        <h1 style="background-color: #24A19C;margin-bottom: -19px;">Mua hoa</h1>
        <h3 style="background-color: #7CD1B8;padding-top: 20px;">
            <label>
                Id hoa:
            </label>
            <input id="id" type="text" name="id" value="" />
            <br><br>
            <label>
                Tên hoa:
            </label>
            <input id="tenhoa" type="text" name="tenhoa" />
            <br><br>
            <label>
                Số lượng:
            </label>
            <input id="soluong" type="text" name="soluong" value="" />
            <br><br>
            <label>
                Đơn giá:
            </label>
            <input id="gia" type="text" name="gia" value="" />
            <br><br>
            <button type="submit" name="save-session" value="Save session">
                Mua hoa
            </button>
        </h3>
    </form>
</body>

</html>
<?php
ob_end_flush();
//session_destroy();

?>