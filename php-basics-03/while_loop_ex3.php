<?php
function countLetterPresence($text, $word){
    $count = 0;
    $x = 0;
    $newString = explode(" ",$text);
    while($x <= strlen($text)){
        if($newString[$x] === $word) $count++;
        $x++;
    }
    return "$count \n";
}
echo countLetterPresence("The word we are searching for is a word found in this sentence", "word");
?>