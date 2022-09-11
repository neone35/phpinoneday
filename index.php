<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP in one day</title>
</head>
<body>
<p>This is some text.</p>
<?php
### comment
echo "Hello World! <BR>"; // comment
echo("ABCD"); // we can use parenthesis
echo '<BR>Today is Friday, we\'re going to the zoo.'; // escaping special characters

### include and require
include 'heading.html'; // produces a warning without stopping the script
require 'heading.html'; // produces a fatal error and stops the script
include_once 'heading.html'; // doesn't display as file only allowed once

### redirecting
//header('Location: http://example.com');

### constants
const PI_CONST = 3.14;
//const PI_CONST = 3.20; // already defined

### variables
$thisIsAVariable = "im variable";
$this_is_a_variable = 415;
echo 'The value is $thisIsAVariable.';
echo "The value is $thisIsAVariable. <br>";
var_dump($this_is_a_variable); // verify data type of value
$p = (int) 4.6; // casting
var_dump($p);

### operators
$x = 5;
$y = 2;
$sum = $x + $y;
$subtract = $x - $y;
$multiply = $x * $y;
$divide = $x / $y;
$modulo = $x % $y;
$exponent = $x ** $y;
$x += 3; echo "<br>";
echo $y++; // increment after echo
echo ++$y; // increment before echo
echo "<br> $exponent";

### other data types
$concatString = "concat" . " these";
echo "<br><br>" . $concatString . "<br>";
echo 'Length of $varString is ' . strlen($concatString) . "<br>";
$str2 = 'Hello World';
$str3 = strtolower($str2);
echo $str3 . "<br>";
$str6 = '**Hello**World***';
echo trim($str6, '*') . '<BR>';
$str7 = 'ABCDEF';
echo substr($str7, 2).'<BR>';
echo substr($str7, -3).'<BR>';
echo substr($str7, 2, 1).'<BR>';
# string to time
$nextMonday = "next Monday";
$unixTime = strtotime($nextMonday);
echo strtotime("now") . " " . strtotime("20 Dec 2100") . '<BR>';
echo date("c", $unixTime) .'<BR>';
echo date("d-M-y", $unixTime) . "<BR>";
date_default_timezone_set('Europe/Vilnius');
# arrays
$firstArr = array();
$secondArr = array(11, 16, 4, 9, 12);
echo $secondArr[3] .'<BR>';
$secondArr[3] = 20;
$fruitsArr = array('Apple', 'Banana', 'Coconut');
$assocArr = array(
    'Peter' => 11,
    'Jane' => 16,
    'Paul' => 12
);
echo $assocArr['Paul'] .'<BR>';
$simpleMDArr = array(
    array(1, 2, 1, 4, 5),
    array(0, 5, 1, 3, 4),
    array(4, 1, 7, 8, 9)
);
echo $simpleMDArr[2][3] .'<BR>';
$assocMDArr = array(
    "first array" => array(1, 2, 6, 1, 3),
    "second array" => array(3, 5, 1, 8, 9),
    "third array" => array(1, 0, 9, 4, 7)
);
echo $assocMDArr["first array"][2] .'<BR>';
$anotherAssocMDArr = array(
    "first player" => array("name" => 'John', "age" => 25),
    "second player" => array("name" => 'Tim', "age" => 35)
);
echo $anotherAssocMDArr["first player"]["age"] .'<BR>';
var_dump($anotherAssocMDArr); echo "<BR>";
print_r($anotherAssocMDArr); echo "<BR>"; // doesn't give data type of each element
# add/delete on arrays
$addDemo = array(1, 5, 3, 9);
$addDemo[] = 7; // becomes (1, 5, 3, 9, 7).
$addDemoAssoc = array('Peter'=>20, 'Jane'=>15);
$addDemoAssoc['James'] = 17; // becomes ('Peter'=>20, 'Jane'=>15, 'James'=>17).
$colors = array("red", "black", "pink", "white");
array_splice($colors, 2); // $colors becomes ("red", "black").
$pets = array("corgi", "poodle", "golden retriever", "jack russell");
array_splice($pets, 1, 2); // $pets becomes ("corgi", "jack russell").
$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo) .'<BR>';
var_dump(array_search('5', $countDemo));
var_dump(in_array('5', $countDemo)); echo "<BR>";
$newArray1 = array_merge($countDemo, $colors);
print_r($newArray1); echo "<BR>";
// the last one overrides the earlier ones
$str1 = array('A'=> 12, 'B' => 5, 'C' => 8);
$str2 = array('A' => 15, 'D' => 10);
$newArray3 = array_merge($str1, $str2); // becomes ('A'=> 15, 'B' => 5, 'C' => 8, 'D' => 10).

### control structures in PHP
// Equal (==) values on both sides are equal
// 5 == 5, 'Hello' == 'Hello' and 5 == 5.0 all return true

// Identical (===) values on both sides are equal and of the same date type
// 5 === 5 returns true while 5 === 5.0 returns false

// Not equal (!= or <>)
// 5 != 7 and 5 <> 7 both return true

// Not identical (!==)
// 5 !== 5.0 returns true

// Greater than (>)
// Greater than or equal to (>=)
// 8 >= 5 and 6 >= 6 both return true
// Less than (<)
// Less than or equal to (<=)
// 10 <= 14 and 13 <= 13 both return true

// Spaceship (<=>) Introduced in PHP 7
// Returns 0 if the values on both sides are equal (not necessarily identical)
// Returns 1 if the value on the left is greater
// Returns -1 if the value on the left is smaller

### logical operators
// NOT (!) operator returns true when it precedes an expression that is false.
// !(5 > 10) returns true as 5 > 10 is false

// AND (&&)
// '&&' has higher precedence than 'and' compared to '='
// $c = 5 > 1 && 13 < 5 returns false

// OR (||)
// $g = 3 < 2 || 3 > 1 returns true


?>
</body>
</html>
