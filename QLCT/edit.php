<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        button{
            margin-right: 20px;
            padding: 5px;
        }
        form{
            width: 600px;
            margin: auto;
            text-align: center;
        }
        div.form-group{
            width: 90%;
            height: 24px;
            margin: 5px;
        }
        div.form-group input{
            float: right;
            height: 20px;
            width: 400px;
        }
        span{
            font: 18px bold;
            font-weight: bold;
            float: right;
            margin-right: 10px; 
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    include 'connect.php';
    $id = $_GET['id'];
    $sql="SELECT * FROM `qlcauthu` WHERE `ID`= ".$id;
    $result = $con->query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $info = $data[0];
    // echo "<pre>";
    // var_dump($info);
    $errors = [];
    $kq = "";
    $err_ten = "";
    $err_tuoi = "";
    $err_quoctich = "";
    $err_vitri = "";
    $err_luong = "";
    if(isset($_POST['POST'])) {
        $demo = true;
        $ten = $_POST['TENCAUTHU'];
        $tuoi = $_POST['TUOI'];
        $quoctich = $_POST['QUOCTICH'];
        $vitri = $_POST['VITRI'];
        $luong = $_POST['LUONG'];

        if(empty($_POST['TENCAUTHU'])) {
            $err_ten = "vui long nhap ten";
            $demo = false;
        }
        if(empty($_POST['TUOI'])) {
            $err_tuoi = "vui long nhap tuoi";
            $demo = false;
        }
        if(empty($_POST['QUOCTICH'])) {
            $err_quoctich = "vui long nhap quoctich";
            $demo = false;
        }
        if(empty($_POST['VITRI'])) {
            $err_vitri = "vui long nhap vitri";
            $demo = false;
        }
        if(empty($_POST['LUONG'])) {
            $err_luong = "vui long nhap luong";
            $demo = false;
        }
        if ($_POST['TENCAUTHU'] != '' && 
            $_POST['TUOI'] != '' && 
            $_POST['QUOCTICH'] != '' && 
            $_POST['VITRI'] != '' && 
            $_POST['LUONG'] != '') 
        {   
            $sql = "UPDATE `qlcauthu` SET `TENCAUTHU` ='".$_POST['TENCAUTHU']."', `TUOI` ='".$_POST['TUOI']."',
                                            `QUOCTICH`='".$_POST['QUOCTICH']."',
                                            `VITRI`='".$_POST['VITRI']."',
                                            `LUONG`='".$_POST['LUONG']."' WHERE `ID` = ".$_GET['id'];
            if ($result = $con->query($sql)) {
                echo "<h1>Chỉnh sửa thông tin cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
            }else{
                echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
            }
        }
    }
    ?>
        <form action="" method="POST">
            <h1>Chỉnh sửa thông tin cầu thủ</h1>
            <div class="form-group">
                <input type="text" name="TENCAUTHU" value="<?php echo $info['TENCAUTHU'] ?>"><span>Tên cầu thủ: </span>
            </div>
            <div class="form-group">
                <input type="text" name="TUOI" value="<?php echo $info['TUOI'] ?>"><span>Tuổi: </span>
            </div>
            <div class="form-group">
                <input type="text" name="QUOCTICH" value="<?php echo $info['QUOCTICH'] ?>"><span>Quốc tịch: </span>
            </div>
            <div class="form-group">
                <input type="text" name="VITRI" value="<?php echo $info['VITRI'] ?>"><span>Vị trí: </span>
            </div>
            <div class="form-group">
                <input type="text" name="LUONG" value="<?php echo $info['LUONG'] ?>"><span>Lương: </span>
            </div>
            <div class="form-group">
                <button type="submit" name="POST">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>