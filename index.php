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
echo '<BR>Today is Friday, we\'re going to the zoo.<BR><BR>'; // escaping special characters

### include and require
include_once "include_require.php";
echo '<a href="include_require.php" target="_blank">include_require.php<br></a>';

### redirecting
echo '<a href="redirect.php" target="_blank">redirect.php<br></a>';

### constants
const PI_CONST = 3.14;
//const PI_CONST = 3.20; // already defined

### variables
echo '<a href="variables.php" target="_blank">variables.php<br></a>';

### operators
echo '<a href="operators.php" target="_blank">operators.php<br></a>';

### other data types
echo '<a href="data_types.php" target="_blank">data_types.php<br></a>';

### control structures in PHP
echo '<a href="control_structures.php" target="_blank">control_structures.php<br></a>';

### Functions
echo '<a href="functions.php" target="_blank">functions.php<br></a>';

?>

<!-- Displaying HTML code -->
<?php for ($i = 0; $i < 3; ++$i): ?>
    <h1>Hello</h1>
<?php endfor;
?>


</body>
</html>
