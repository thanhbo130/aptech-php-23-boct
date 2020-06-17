<?php
echo "<a href=\"./\">BACK</a>";

/* 7. --- OPERATOR ---
 *
 * Operators are used to perform operation on variables and values.
 *
 * Group of operators:
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Increment/Decrement operatos
 * Logical operators
 * String operators
 * Array operatos
 *
 */

echo "<h1>7. OPERATORS</h1>";

/*
 * EXERCISE 1 : Using each of operators at least once.
 */

/*
 * SUGGESTION :
 * Can be watch more at : https://www.w3schools.com/php/php_operators.asp
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$x=2;
$y=4;
$z = "haha";
$text ="smile";
$arr1 = [0=>"0",1=>"1",2=>"2"];
$arr2 = [10=>"cao",2=>"thanh",5=>"bo"];//can not union 2
$add = $x+$y;
$exp = $x**$y;
$comp = $x===$z;
$stringOp = $text.=$z;
$arrUnion = $arr1+ $arr2;
echo $add;
echo "<br>";
echo $exp;
echo "<br>";
print_r ($comp);
echo "<br>";
echo $stringOp;
echo "<br>";
print_r ($arrUnion);
?>