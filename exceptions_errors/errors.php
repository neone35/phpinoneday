<?php
// difference between errors and exceptions is that exceptions can be caught while errors, by default, cannot
// From PHP 7 onwards, PHP throws an Error exception when some errors occur;
// four main types of errors defined in PHP - notices, warnings, syntax errors and fatal errors
// Each error type is further divided into subtypes and each subtype is represented by a constant and an error code
// warnings are minor, while syntax and fatals terminate the script

echo $some_undefined_variable;
// it is a common practice for us to display these messages only during the development stage of our site
// When display_errors is off, we typically log the errors reported by PHP to a log file

# custom error handler when display_errors is off
// while a custom exception handler handles uncaught exceptions, a custom error handler handles errors
// custom error handler does not result in script termination
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo '<BR>Oppsss... An error occurred.<BR>' . $errstr;
}

set_error_handler('myErrorHandler');
echo $a;
echo '<BR>Script is not terminated';

// function to run when a script is about to be terminated
function myShutDownHandler()
{
    // we need to determine whether the script termination is due to an error
    // contains four keys:
    // type (which gives the error type),
    // message (which gives the error message),
    // file (which gives the file where the error occurred) and
    // line (which gives the line where the error occurred)
    $lastError = error_get_last();
    if (isset($lastError)) {
        echo '<BR>Oppsss... Script terminated.<BR>';
    }
}

register_shutdown_function('myShutDownHandler');
hello();