<?php
// $_SESSION array is stored on the server and is available to all pages on the site during the duration of the session
// Each session created is associated with an automatically generated unique session ID
// This function creates a new session if one has not already been created or resumes the current one if it exists
session_start();

$_SESSION['myFavFood'] = 'Pizza';
$_SESSION['myFavDrink'] = 'Cola';
$_SESSION['myFavColor'] = 'Orange';

#updating a session variable
$_SESSION['myFavDrink'] = 'Beer';

#deleting a session variable
unset($_SESSION['myFavColor']);
