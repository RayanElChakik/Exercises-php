<?php
function replaceWords($strings){
    $search = array("Python", "PHP");
    $firstArray = array("pHP", "python");
    $secondArray = array("PHP", "Python");
    $newString = str_replace($search, $firstArray, $strings);
    return str_replace($firstArray, $secondArray, $newString); 
}
echo replaceWords("This string shows how to replace Python with PHP and PHP with Python") , "\n";
?>