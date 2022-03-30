<?php
$str = "123456789";

$array = str_split($str);

$min = null;
for ($i = 0; $i < count($array); $i++) {
    if ($min == null) {
        $min = $array[$i];
    } else {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
}
echo "Giá trị nhỏ nhất là $min";
?>