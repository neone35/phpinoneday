<?php

# try, catch, finally
try {
    include "connect.php";
    // Throwing an exception simply means PHP will create an object using one of the predefined classes
    // Exception, PDOException, DOMException and OutOfBoundsException
    // These objects contain information about the exception and can be used to call various methods
    // methods include the getMessage(), getFile(), getLine() and getTraceAsString()
} catch (PDOException $e) {
    echo '<BR>Unable to connect ' . $e->getMessage();
} catch (Exception $e) {
    echo '<BR>Something else happened' . $e->getMessage();
} finally {
    // This block is optional and always executed regardless of whether the try block succeeds or fails
    echo '<BR><BR>The finally block is always executed';
}

echo '<BR>After connecting';
echo '<BR>Welcome to PHPinOneDay <BR>';

# throw
function displayUserInput($userInput)
{
    if ($userInput > 100) {
        // we can throw our own exceptions using the throw keyword
        // OutOfRangeException is a predefined class in PHP extended from the Exception class
        throw new OutOfRangeException('<BR>User input is too big');
    } else {
        echo '<BR>' . $userInput;
    }
}

try {
    displayUserInput(105);
} catch (OutOfRangeException $e) {
    echo $e->getMessage();
}
try {
    displayUserInput(16);
} catch (OutOfRangeException $e) {
    echo $e->getMessage();
}
echo "<BR>";

# exception handler
// In most cases, despite our best efforts, there are bound to be exceptions we fail to anticipate
// PHP allows us to specify a custom exceptionhandler that gets called whenever there are exceptions we fail to catch
// However, after the exception handler is called, the PHP script will be terminated
// For a function to qualify as an exception handler, it needs to have one parameter for storing the uncaught exception object
function myExceptionHandler($e)
{
    echo '<BR>Oppsss... An uncaught exception occurred.<BR>' . $e->getMessage();
}
set_exception_handler('myExceptionHandler');
$pdo = new PDO("some invalid database");
echo 'This will not be executed';