<?php
// We can use the PDO library to connect to 12 different types as opposed to MySQLi
$pdo = new PDO("mysql:host=localhost;dbname=phpinoneday",
    "root", "artur39307290019");
// To get PDO to inform us of any issues, we need to use the setAttribute() method to configure the error mode
// By default, after establishing a successful connection, PDO does not inform us of anything that goes wrong
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// the easiest way to send queries that do not return data - exec()
// the easiest way to send queries that return data is to - query()
// However, both methods put us at risk of a form of attack known as an SQL injection (similar to XSS)
// a better way is to use prepared statements

////1) Create the SQL statement using placeholders
// (? or :name) to replace user inputs in SQL statement
$sqlUnnamed = "SELECT * FROM pets WHERE owner = ? AND petname = ?";
$sqlNamed = "SELECT * FROM pets WHERE owner = :owner AND petname = :pname";

////2) Prepare the statement - to give chance for database to analyze, compile, optimize. Doesn't execute
$preparedUnnamed = $pdo->prepare($sqlUnnamed);
$preparedNamed = $pdo->prepare($sqlNamed);

//3) Bind variables or values to the placeholders
$myPet = 'tigris';
$preparedUnnamed->bindValue(2, $myPet); // set second placeholder (petname) to $myPet value
$preparedNamed->bindValue(':pname', $myPet);

//4) Execute the statement
$preparedUnnamed->execute();
$preparedNamed->execute();

//5) Fetch any data returned if necessary
// The fetch() method fetches the rows one by one while the fetchAll() method fetches all rows at once.
// Commonly used styles include the FETCH_ASSOC (associative array) and FETCH_NUM (indexed array) styles
while ($row = $preparedUnnamed->fetch(PDO::FETCH_NUM)){
    echo 'Pet = ' . $row[1] . '<BR>';
    echo '<BR>Owner = ' . $row[0] . '<BR>';
}
while($row = $preparedUnnamed->fetch(PDO::FETCH_ASSOC))
{
    echo 'Pet = '.$row['petname'].'<BR>';
    echo '<BR>Owner = '.$row['owner'].'<BR>';
}