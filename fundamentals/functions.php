<?php
function displayGreetings(){
    echo 'Hello <BR>';
}
displayGreetings();

// with parameters
function displayGreetings2($name, $message){
    echo "Hello $name, $message" . "<BR>";
}
displayGreetings2('Jamie', 'good morning');

// with default value
function displayGreetings3($name, $message = 'have a good day'){
    echo "Hello $name, $message" . "<BR>";
}
displayGreetings3('Jamie');

// returns result
function addNumbers($num1, $num2, $num3){
    return $num1 + $num2 + $num3;
    echo 'Hello';
}
echo addNumbers(9, 6, 1);
