<?php

$pdo = new PDO("mysql:host=localhost;dbname=phpinoneday",
    "wrongUserName", "artur39307290019");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);