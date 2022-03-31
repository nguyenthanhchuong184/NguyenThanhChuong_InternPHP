<?php
$a = 5; //Pham vi local

function myTest()
{
    echo $a; //Pham vi local
}

myTest();

// ---------------------------
//Global
$b = 5;
$c = 10;

function myTest2()
{
    global $b, $c;
    $c = $b + $c;
}

myTest2();
echo $c;

function myTest3()
{
    $GLOBALS['c'] = $GLOBALS['b'] + $GLOBALS['c'];
}

myTest3();
echo $c;

    //Pham vi static
    static $remember;

    
