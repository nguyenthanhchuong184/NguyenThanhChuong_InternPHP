<?php
    $str = "123456789";

    $number = (int)$str;
    $max = 0;
    while ($number > 0) {
        $x = $number % 10; 
        if ($x > $max) {
            $max = $x;
        }
        $number = $number/10;
    }
    echo $max;
