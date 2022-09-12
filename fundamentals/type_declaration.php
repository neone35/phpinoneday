<?php
// To use type declaration with scalar data types, we need PHP 7 and above
// Scalar data types refer to data types that store a single value, such as int, float, bool and string
declare(strict_types=1);
function addNumbersStrict(int $num1, int $num2,
                          int $num3): int
{
    return $num1 + $num2 + $num3;
}
//echo addNumbersStrict('9', '6', '1');
echo addNumbersStrict(9, 6, 1); echo "<br>";

function addTwoNums($a, $b): int {
    return $a + $b;
}
echo '<BR>'.addTwoNums(3, 1);
//echo '<BR>'.addTwoNums(3.9, 1);
