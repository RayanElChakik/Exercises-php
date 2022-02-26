<?php
function checkPalindrome($string){
    if($string === strrev($string)) return "Yes, {$string} is a palindrome";
    else return "No, {$string} is not a palindrome";
}
echo checkPalindrome("madam"), "\n";
echo checkPalindrome("nurse"), "\n";
?>