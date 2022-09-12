<?php
# string operations
$concatString = "concat" . " these";
echo "<br><br>" . $concatString . "<br>";
echo 'Length of $varString is ' . strlen($concatString) . "<br>";
$str2 = 'Hello World';
$str3 = strtolower($str2);
echo $str3 . "<br>";
$str6 = '**Hello**World***';
echo trim($str6, '*') . '<BR>';
$str7 = 'ABCDEF';
echo substr($str7, 2) . '<BR>';
echo substr($str7, -3) . '<BR>';
echo substr($str7, 2, 1) . '<BR>';
# string to time
$nextMonday = "next Monday";
$unixTime = strtotime($nextMonday);
echo strtotime("now") . " " . strtotime("20 Dec 2100") . '<BR>';
echo date("c", $unixTime) . '<BR>';
echo date("d-M-y", $unixTime) . "<BR>";
date_default_timezone_set('Europe/Vilnius');
# arrays
$firstArr = array();
$secondArr = array(11, 16, 4, 9, 12);
echo $secondArr[3] . '<BR>';
$secondArr[3] = 20;
$fruitsArr = array('Apple', 'Banana', 'Coconut');
$assocArr = array(
    'Peter' => 11,
    'Jane' => 16,
    'Paul' => 12
);
echo $assocArr['Paul'] . '<BR>';
$simpleMDArr = array(
    array(1, 2, 1, 4, 5),
    array(0, 5, 1, 3, 4),
    array(4, 1, 7, 8, 9)
);
echo $simpleMDArr[2][3] . '<BR>';
$assocMDArr = array(
    "first array" => array(1, 2, 6, 1, 3),
    "second array" => array(3, 5, 1, 8, 9),
    "third array" => array(1, 0, 9, 4, 7)
);
echo $assocMDArr["first array"][2] . '<BR>';
$anotherAssocMDArr = array(
    "first player" => array("name" => 'John', "age" => 25),
    "second player" => array("name" => 'Tim', "age" => 35)
);
echo $anotherAssocMDArr["first player"]["age"] . '<BR>';
var_dump($anotherAssocMDArr);
echo "<BR>";
print_r($anotherAssocMDArr);
echo "<BR>"; // doesn't give data type of each element
# add/delete on arrays
$addDemo = array(1, 5, 3, 9);
$addDemo[] = 7; // becomes (1, 5, 3, 9, 7).
$addDemoAssoc = array('Peter' => 20, 'Jane' => 15);
$addDemoAssoc['James'] = 17; // becomes ('Peter'=>20, 'Jane'=>15, 'James'=>17).
$colors = array("red", "black", "pink", "white");
array_splice($colors, 2); // $colors becomes ("red", "black").
$pets = array("corgi", "poodle", "golden retriever", "jack russell");
array_splice($pets, 1, 2); // $pets becomes ("corgi", "jack russell").
$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo) . '<BR>';
var_dump(array_search('5', $countDemo));
var_dump(in_array('5', $countDemo));
echo "<BR>";
$newArray1 = array_merge($countDemo, $colors);
print_r($newArray1);
echo "<BR><BR>";
// the last one overrides the earlier ones
$str1 = array('A' => 12, 'B' => 5, 'C' => 8);
$str2 = array('A' => 15, 'D' => 10);
$newArray3 = array_merge($str1, $str2); // becomes ('A'=> 15, 'B' => 5, 'C' => 8, 'D' => 10).
