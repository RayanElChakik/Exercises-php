<?php
function shapeChecking($s1,$s2,$d1){
    $rectangle= 0; $diagonal= 0;
    if(($s1*$s1 + $s2*$s2)=== ($d1 * $d1)) $rectangle++;
    if($s1 === $s2) $diagonal++;
    if($rectangle>0) return "This is a tectangle \n";
    if($diagonal>0) return "This is a diagonal \n";
    return "This is a rohmnus \n";
}
echo shapeChecking(3,4,5);
echo shapeChecking(4,5,6);
echo shapeChecking(6,6,9);
?>