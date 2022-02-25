<?php
function armstrong($num){
    $sum=0;  
    $var=$num;  
    while($var!=0){  
        $rem=$var%10;  
        $sum=$sum+$rem*$rem*$rem;  
        $var=$var/10;
    }  
    if($num==$sum) return "{$num} Armstrong number"; 
    else return "{$num}is not an armstrong number";
}
echo armstrong(153), "\n";
echo armstrong(256), "\n";
?>