<?php
function swap($var1,$var2){
    $var3 = $var1;
    $var1 = $var2;
    $var2 = $var3;
    return "Var1 = {$var1} & Var2 = {$var2} \n";
}
echo swap (32,45);
?>