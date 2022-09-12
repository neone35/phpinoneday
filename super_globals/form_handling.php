<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form Sample</title>
</head>
<body>
<!-- action attribute specifies the file to process the HTML form. -->
<!-- empty action means we want to use current file -->
<!-- method attribute specifies the method to send the form data -->
<!-- default method is get. Can be post also -->
<!-- $_GET - form data is appended to the URL -->
<!-- $_POST - data is not appended to the URL. Suitable for sending sensitive information to the server -->
<form action="" method="get">
    Name <BR>
    <!-- It's mandatory to name form elements -->
    <label>
        <input type="text" name="studentName" value="
        <?php
        if (isset($_GET['studentName']))
            echo htmlspecialchars(trim($_GET['studentName']));
        ?>">
    </label>
    <BR><BR>Favorite Subject(s)<BR>
    <!-- a pair of square brackets '[]' indicates that the option(s) selected will be stored as an array-->
    <!-- value specifies that this value will be submitted for each selected option  -->
    <label>
        <input type="checkbox" name="subj[]" value=
        "EN"
            <?php
            if (isset($_GET['subj']) && in_array('EN', $_GET['subj']))
                echo 'checked';
            ?>
        >
    </label>English
    <label>
        <input type="checkbox" name="subj[]" value=
        "MA"
            <?php
            if (isset($_GET['subj']) && in_array('MA', $_GET['subj']))
                echo 'checked';
            ?>
        >
    </label>Math
    <label>
        <input type="checkbox" name="subj[]" value=
        "PG"
            <?php
            if (isset($_GET['subj']) && in_array('PG', $_GET['subj']))
                echo 'checked';
            ?>
        >
    </label>Programming
    <BR><BR>Gender<BR>
    <!-- have the same name as they belong to the same group -->
    <label>
        <input type="radio" name="gender[]" value=
        "M"
            <?php
            if (isset($_GET['gender']) && in_array('M', $_GET['gender']))
                echo 'checked';
            ?>
        >
        Male
    </label>
    <label>
        <input type="radio" name="gender[]" value=
        "F"
            <?php
            if (isset($_GET['gender']) && in_array('F', $_GET['gender']))
                echo 'checked';
            ?>
        >
        Female
    </label>
    <BR><BR>
    <!-- http://localhost:63342/phpinoneday/super_globals/form_handling.php?studentName=Artur&subj%5B%5D=EN&subj%5B%5D=MA&subj%5B%5D=PG&gender=M&sm=SubmitForm -->
    <!-- what follows the question mark '?' in the URL is known as a QUERY STRING -->
    <!-- %5B encodes the character “[” while %5D encodes “]”, so decoded subj[]=EL&subj[]=MA -->
    <input type="submit" name="sm" value="SubmitForm">
</form>
<br><br>
<?php
## $_GET is a superglobal that stores the QUERY STRING as an associative array
if (isset($_GET['sm']))
    print_r($_GET);
?>
<br><br>
</body>
</html>

<?php
## isset() function
# checks if a variable has been DECLARED and is not NULL.
# commonly used to determine if a button has been clicked.
$a = 5;
$b = NULL;
var_dump(isset($a));
var_dump(isset($b));
var_dump(isset($c));
echo "<br>";

## Filtering user input
// sanitization is the process of removing invalid characters from the input (ex. removing letters from digit)
$num = '152.5abc';
echo filter_var($num, FILTER_SANITIZE_NUMBER_INT) . "<br>";
// validation is the process of checking if the input satisfies certain criteria (ex. contains @)
$email = 'abc@gmail';
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) . "<br>";

## cross-site scripting (XSS) - critical security concept

