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

<!-- Displaying HTML code -->
<?php for ($i = 0; $i < 1; ++$i): ?>
    <p>Hello</p>
<?php endfor;
?>

<?php
### fundamentals
echo "<h2>Fundamentals</h2>";
## comment
echo "Hello World! <BR>"; // comment
echo("ABCD"); // we can use parenthesis
echo '<BR>Today is Friday, we\'re going to the zoo.'; // escaping special characters
## include and require
include_once "fundamentals/include_require.php";
echo '<a href="fundamentals/include_require.php" target="_blank">include_require.php<br></a>';
## redirecting
echo '<a href="fundamentals/redirect.php" target="_blank">redirect.php<br></a>';
## constants
const PI_CONST = 3.14;
//const PI_CONST = 3.20; // already defined
## variables
echo '<a href="fundamentals/variables.php" target="_blank">variables.php<br></a>';
## operators
echo '<a href="fundamentals/operators.php" target="_blank">operators.php<br></a>';
## other data types
echo '<a href="fundamentals/data_types.php" target="_blank">data_types.php<br></a>';
## control structures in PHP
echo '<a href="fundamentals/control_structures.php" target="_blank">control_structures.php<br></a>';
## Functions
echo '<a href="fundamentals/functions.php" target="_blank">functions.php<br></a>';
## Type declaration
echo '<a href="fundamentals/type_declaration.php" target="_blank">type_declaration.php<br></a>';

echo "<h2>Superglobals</h2>";
## Form handling
echo '<a href="super_globals/form_handling.php" target="_blank">form_handling.php<br></a>';
## Sessions
echo '<a href="super_globals/session.php" target="_blank">session.php<br></a>';
echo '<a href="super_globals/session2.php" target="_blank">session2.php<br></a>';
## Cookies
echo '<a href="super_globals/cookie.php" target="_blank">cookie.php<br></a>';
echo '<a href="super_globals/cookie2.php" target="_blank">cookie2.php<br></a>';

echo "<h2>Object-oriented programming</h2>";
echo '<a href="oop/Movie.php" target="_blank">Movie.php class<br></a>';
echo '<a href="oop/AwardWinningMovie.php" target="_blank">Movie.php subclass<br></a>';
echo '<a href="oop/awarded_movie.php" target="_blank">objects of class & subclass<br></a>';

echo "<h2>Interacting with database</h2>";
echo '<a href="db_interact/prepared_statements.php" target="_blank">prepared_statements.php<br></a>';
echo '<a href="db_interact/sql_cud.php" target="_blank">sql_cud.php<br></a>';
echo '<a href="db_interact/sql_read.php" target="_blank">sql_read.php<br></a>';
?>


</body>
</html>
