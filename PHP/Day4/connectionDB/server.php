<?php
var_dump($_POST);
// call connection file
// include 'index.php'; // path to database connection file
require 'index.php';

/**
 * include vs require
 * include ==> if file not found ==> warning ==> 
 * if any code after include will be executed
 * require ==> if file not found ==> fatal error 
 * if any code after require will not be executed
 */

// var_dump($connection);

if (isset($_POST['btn-register'])) {

    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
    $encryptedPassword = md5($password);

    /**
     * check if user exists
     */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // valid email
        header("location:register.php?error=invalid email");
        exit();
        // email .com @gmail.com ==> regex
    }


    /** Name Validation
     * preg_match ===> pattern  regular expression match
     *
     * match(pattern, variable)
     * string $pattern , string $subject
     * 
     * /^ ==> start with
     * $/ ==> end with
     * [a-zA-Z] ==> a to z or A to Z
     * {3,} ==> at least 3 characters
     * [a-zA-Z-' ]* ==> allow letters, hyphens, apostrophes, and spaces
     */

    if (!preg_match("/^[a-zA-Z]{3,}$/", $name)) {
        // valid name
        header("location:register.php?error=invalid name");
        exit();
        // email .com @gmail.com ==> regex
    }


    /** validation on password 
     * /^ => start with
     * $ / => end with
     * [0-9]{5,15} => at least 5 to 15 digits
     * [0-9] => a digit
     * [a-zA-Z] => a letter
     */
    /**
     * Explanation of the regex pattern:
     * ^                         # Start of string
     * (?=.*[a-z])               # At least one lowercase letter
     * (?=.*[A-Z])               # At least one uppercase letter
     * (?=.*\d)                  # At least one digit
     * (?=.*[@$!%*?&])           # At least one special character from the set @$!%*?&
     * [A-Za-z\d@$!%*?&]{8,}     # Allowed characters and minimum length of 8
     * $                         # End of string
     */
    if (!preg_match("/^[0-9]{5,15}$/", $password)) {
        // valid password
        header("location:register.php?error=invalid password");
        exit();

        // email .com @gmail.com ==> regex
    }

    $checkEmail = "select * from users where email='$email'";


    $user = $connection->query($checkEmail)->fetchAll(PDO::FETCH_ASSOC);

    // array of data ===> [no users] 
    if ($user) {
        header("location:register.php?error=user already exists");
        exit();
    } else {

        $query = "insert into users (name,email,password)values('$name','$email','$encryptedPassword')";

        // $sqlQuery=$connection->prepare($query); //===>   sql statement
        // $sqlQuery->execute(); //===> run sql statement
        $response = $connection->exec($query); //===> run sql statement
        if ($response) {
            header("location:login.php?message=registration successful");
            exit();
        }
    }
}



// user Login
if (isset($_POST['btn-login'])) {

    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
    $encryptedPassword = md5($password);
    // $query = "select * from users where email='$email' and password='$encryptedPassword'";


    $checkEmail = "select * from users where email='$email'";


    $user = $connection->query($checkEmail)->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($user['password'] === $encryptedPassword) {
            // user exists
            $_SESSION['login_id'] = $user['id'];
            header("location:profile.php?message=login successful&pageName=profile&pageHeader=Profile Page");

            //  header("location:profile.php?message=login successful&name=" . $user['name'] . "&email=" . $user['email']);

            exit();
        } else {
            header("location:login.php?error=invalid email or password");
            exit();
        }
    } else {
        header("location:login.php?error=invalid email");
        exit();
    }
}
