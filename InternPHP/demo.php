<?php
    $subject = 'toi dang hoc, nghien cuu lap trinh tai hoclaptrinh.vn';
    $search = ['hoc', 'nghien cuu', 'lap trinh'];
    $replace   = ['learn', 'research'];
    $result = str_replace($search, $replace, $subject);
    echo $result;
