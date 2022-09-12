<?php
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

## logical operators
// NOT (!) operator returns true when it precedes an expression that is false.
// !(5 > 10) returns true as 5 > 10 is false

// AND (&&)
// '&&' has higher precedence than 'and' compared to '='
// $c = 5 > 1 && 13 < 5 returns false

// OR (||)
// $g = 3 < 2 || 3 > 1 returns true

#IF
$a = 7;
if ($a < 0) {
    echo 'if block<BR>';
    echo '$a is smaller than 0';
} elseif ($a < 5)
    echo 'First elseif block';
elseif ($a < 10)
    echo 'Second elseif block <BR>';
else
    echo 'Else block';
#Ternary Operator
$a = (7 == 7 ? 'Yes <BR>' : 'No <BR>');
echo $a;
#Switch Statement | can be faster than "IF" if you have many conditions to test
$b = 20;
switch ($b) {
    case 10:
        echo 'Chocolate<BR>';
        break;
    case 20:
        echo 'Lemon<BR>'; // executes everything, until it reaches a break statement
    case 25:
        echo 'Strawberry<BR>';
        break;
    default:
        echo 'None of the above<BR>';
}
#For loop | executes a block of code repeatedly until the test condition is no longer valid
for ($c = 1; $c < 5; ++$c) {
    echo 'The value of $c is ' . $c . '<BR>';
    if ($c == 2)
        continue;
    echo 'First. <BR>';
    if ($c == 3)
        break;
}
#Foreach Loop | is used to loop over arrays
$arr1 = array('Aaron' => 12, 'Ben' => 23, 'Carol' => 35);
foreach ($arr1 as $age) {
    echo 'The age is ' . $age . '<BR>';
}
#While Loop | performs a task repeatedly while a specific condition remains valid
$d = 1;
while ($d < 5) {
    echo 'The value of $d is ' . $d . '<BR>';
    $d++;
}
#Do-while Loop | code within the curly braces of the loop will always be executed at least once
$e = 100;
do {
    echo 'The value is ' . $e;
    $e++;
} while ($e < 0);
# Alternative Syntax
if ($a == 5):
    echo '<BR>The value of $a is<BR>';
    echo $a;
else:
    echo 'Not five <BR><BR>';
endif;
