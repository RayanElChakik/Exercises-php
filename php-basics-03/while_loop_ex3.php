<?php
function countLetterPresence($text, $word){
    $newString = preg_split('/[.|,| ]/', $text);
    $count = 0;
    $x = 0;
    while ($x < sizeof($newString)) {
        if ($newString[$x] == $word) {
            $count++;
        }
        $x++;
    }
    echo $count,"\n";
}
countLetterPresence("The word, we are searching fo,r is a word found in this sentence", "word");
?>