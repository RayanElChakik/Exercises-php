<?php
function squareRoot($num){
    $var1  = $num;
    $var2 = 1;
    while($var1 > $var2){
        $var1 = ($var1 + $var2)/2;
        $var2 = $num/$var1;
    }
    return $var1;
}
echo squareRoot(16) , "\n";
echo squareRoot(4), "\n";
echo squareRoot(150), "\n";
?>