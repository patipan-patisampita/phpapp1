<?php
    include "global2.php";
    $x = 5;
    $num1 = 5;
    $num2 = 13;
    function global_var(){
        $sum = $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'] + $GLOBALS['x'];
        echo $sum;
    }
    global_var();
?>