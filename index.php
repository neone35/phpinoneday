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
<?php
# comment
echo "Hello World! <BR>"; // comment
echo("ABCD"); // we can use parenthesis
echo '<BR>Today is Friday, we\'re going to the zoo.'; // escaping special characters

include 'heading.html'; // produces a warning without stopping the script
require 'heading.html'; // produces a fatal error and stops the script
include_once 'heading.html'; // doesn't display as file only allowed once
?>
</body>
</html>
