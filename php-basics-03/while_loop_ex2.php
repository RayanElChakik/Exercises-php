<?php
function factorial($num){
    $factorial = 1;
    while($num > 0){
        $factorial = $factorial  * $num;
        $num--;
    }
    return " $factorial \n";
}
echo factorial(3);
echo factorial(6);
echo factorial(10);
?>