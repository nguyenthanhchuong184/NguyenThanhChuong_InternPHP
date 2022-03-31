<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }

        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }

        table.table-style-three tr:nth-child(even) td {
            background-color: #56BBF1;
        }

        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <table class="table-style-three">
        <tr>
            <td>ID_SV</td>
            <td>Ten_SV</td>
            <td>AVG</td>
            <td>CapChungNhan</td>
        </tr>
        <?php
        $arHocVien = array(
            "FFSE1701001" => array("Nguyễn Văn Bảo", "95", "1"),
            "FFSE1701002" => array("Huỳnh Thị Thanh Thuỷ", "85", "0"),
            "FFSE1701003" => array("Ngô Việt Anh", "98", "1"),
            "FFSE1701004" => array("Nguyễn Thị Hương Lan", "100", "1")
        );
        foreach ($arHocVien as $key => $value) {
            if ($value[2] == 1) {
                echo "
                <tr>
                    <td>$key</td>
                    <td>$value[0]</td>
                    <td>$value[1]</td>
                    <td>$value[2]</td>
                </tr>
            ";
            }
            // $arHocVien['FFSE1701005'] = array("Nguyễn Thanh Chương", "99", "1");
            // $arHocVien['FFSE1701006'] = array("Huỳnh Tấn Phát", "20", "0");
            // foreach ($arHocVien as $key => $value) {
            //     if ($value[2] >= 0) {
            //         echo "
            //         <tr>
            //             <td>$key</td>
            //             <td>$value[0]</td>
            //             <td>$value[1]</td>
            //             <td>$value[2]</td>
            //         </tr>
            //     ";
            //     }
            //     if ($value[2] == 0) {
            //         unset($arHocVien[$key]);
            //     }
            // }
            // $max = 0;
            // if ($value[1] > $max) {
            //     $max = $value[1];
            //     echo "
            //         <tr>
            //             <td>$key</td>
            //             <td>$value[0]</td>
            //             <td>$max</td>
            //             <td>$value[2]</td>
            //         </tr>
            //     ";
            // }
        }
        ?>
    </table>
</body>

</html>