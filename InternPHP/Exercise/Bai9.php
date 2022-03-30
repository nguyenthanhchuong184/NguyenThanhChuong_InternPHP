<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<br>";
    $result = str_replace($_POST['tugoc'], $_POST['thaythe'], $_POST['vangoc']);
    ?>
    <form action="" method="POST" style="width: 100%; height: 300px;text-align: center;">
        <h1 style="background-color: #577BC1;margin-bottom: -19px;width: 100%;">Thay thế chuỗi</h1>
        <h3 style="background-color: #EBE645;padding-top: 20px;width: 100%;">
            <label>Văn bản gốc</label>
            <section><?php echo "<br>"; ?></section>
            <input id="vangoc" type="text" name="vangoc" value="Tôi yêu Fasttrack SE" style="width: 70%;" />
            <section><?php echo "<br>"; ?></section>
            <div style="width: 100%;">
                <label>
                    Từ gốc
                </label>
                <input id="tugoc" type="text" name="tugoc" value="Tôi" />
                <label>
                    thay thế bằng
                </label>
                <input id="thaythe" type="text" name="thaythe" value="Chúng tôi" />
            </div>
            <br>
            <input id="sauthaythe" type="text" name="sauthaythe" value="<?php echo $result; ?>" style="width: 70%;" />
            <br>
            <br>
            <button type=" submit">
                Thực hiện
            </button>
        </h3>
    </form>


</body>

</html>