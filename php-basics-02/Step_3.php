<?php
$var1 = 32;
$var2 = 45;
echo "Variables before wapping var1 = {$var1} & var2 = {$var2}\n";
$var3 = $var1;
$var1 = $var2;
$var2 = $var3;
echo "Variables after wapping var1 = {$var1} & var2 = {$var2}\n";
?>