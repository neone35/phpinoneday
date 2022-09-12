<?php
// login or resume
session_start(); // We need to call this function whenever we want to access the $_SESSION superglobal
echo '<BR>Food: ' . $_SESSION['myFavFood'];
echo '<BR>Drink: ' . $_SESSION['myFavDrink'];
echo 'Color: ' . $_SESSION['myFavColor'];
session_destroy(); // commonly used on logout