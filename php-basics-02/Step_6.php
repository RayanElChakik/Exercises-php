<?php
function computeSum($num){
    $sum = 0;
    for ($i=0; $i< strlen($num); $i++){
        $sum += $num[$i];
    }
    return $sum;
}
echo computeSum("54321"), "\n";
echo computeSum("987654"), "\n";
?>