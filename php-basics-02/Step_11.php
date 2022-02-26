<?php
function isPrime($num){
    if ($num === 1 || $num === 0)
    return "{$num} is not a prime number";
    for ($i = 2; $i <= $num/2; $i++){
        if ($num % $i == 0) return "{$num} is not a prime number";
    }
    return "{$num} is a prime number";
}
echo isPrime(3), "\n";
echo isPrime(1) , "\n";
echo isPrime(5) , "\n";
echo isPrime(13) , "\n";
echo isPrime(0)  , "\n";
?>