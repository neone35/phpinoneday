<?php

// inheritance
include 'AwardWinningMovie.php';
$awm = new AwardWinningMovie('A12324', 'Max', 6.99, 'Best Picture');
echo $awm->recommend('Japan');
// overriding
echo $awm->displayHeading('H1');
// accessing base class method
$mv = new Movie('A3244', 'Golden Rose', 3.99);
echo $mv->displayHeading('H1');