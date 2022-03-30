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
    if ($_POST["bankinh"] > 0) {
        $dientich = $_POST["bankinh"] * 2 * 3.14;
    }
    ?>
    <form action="" method="POST" style="width: 400px; height: 300px;">
        <h1 style="background-color: #24A19C;margin-bottom: -19px;">Hình tròn</h1>
        <h3 style="background-color: #7CD1B8;padding-top: 20px;">
            <label>
                Diện tích:
            </label>
            <input id="number" type="text" name="number" value="<?php echo $dientich; ?>" />
            <section><?php echo "<br>"; ?></section>
            <label>
                Bán kính:
            </label>
            <input id="bankinh" type="text" name="bankinh" />
            <br><br>
            <button type="submit">
                Submit
            </button>
        </h3>
    </form>


</body>

</html>