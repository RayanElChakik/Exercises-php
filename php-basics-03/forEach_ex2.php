<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
        "id" => 3,
        "name"=> "Omar",
        "email"=> "omar@codi.tech"
    )
);

foreach ($transactions as $person){
    foreach ($person as $key=>$value){
        echo "$key: $value ";
    }
    echo "\n";
}

?>