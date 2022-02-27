<?php
function personalDetails($array){
    foreach ($array as $key=>$value){
            echo "$key: $value ";
        }
        echo "\n";
}
echo personalDetails($personal_details = array(
    "name" => "Rajesh Rao", 
    "occupation" => "Engineer", 
    "age" => 39, 
    "country" => "India")
);
?>