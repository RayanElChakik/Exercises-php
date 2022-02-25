<?php
// Step 8 part a
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');
$length = count($grocery);
echo "Hello Sir, do you have " .$grocery[0]. ", " .$grocery[1]. ", " .$grocery[2]. "? Also if you sell fruits can I find a " .$grocery[ $length -1]. "? \n";

// Step 8 part b
$groceryItems = array(
    array('balade', 'mazere3'),
    array ('Fresh', 'Taanayel'),
    array( 'Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of {$groceryItems[0][0]} eggs and 3 {$groceryItems[2][1]} Water Pack.\n"
?>