<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- DATA TYPES ---
 *
 * Variables can store data of different types.
 *
 * No need to declare type of variable.
 *
 * Data Types common in PHP :
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 *
 *
 */
echo "<h1>6. DATA TYPES</h1>";

/*
 * EXERCISE 1 : List all data types in variables and display it.
 */

/*
 * SUGGESTION :
 * $arr = [1,'2','Nam'];
 * print_r($arr);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$String = "String";
$int = 2020;
$float = 3.14;
$boolean = false;
$arr = [1,"2",3];
echo $String;
echo "<br>";
echo $int;
echo "<br>";
echo $float;
echo "<br>";
echo !$boolean;
echo "<br>";
print_r ($arr);
echo "<br>";
?>