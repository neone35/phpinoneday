<?php
//Section A - Connecting to the database
$pdo = new PDO("mysql:host=localhost;dbname=phpinoneday",
    "root", "*");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Section B - SELECT all rows from pets
$sql = "SELECT petname, owner FROM pets";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<BR>Owner = ' . $row['owner'] . '<BR>';
    echo 'Pet Name = ' . $row['petname'] . '<BR>';
}
echo "<br>";
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    echo '<BR>Owner = ' . $row[1] . '<BR>';
    echo 'Pet Name = ' . $row[0] . '<BR>';
}
