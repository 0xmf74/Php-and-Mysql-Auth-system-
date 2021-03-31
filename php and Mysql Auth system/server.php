<?php
//connect to db
session_start();
$username = "";
$email = "";
$errors = array();
require("config.php");
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'registration');

/*define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "registration");
$db = mysqli_connect('localhost', 'root', '', 'registration');
*/







//if the register button is clicked

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($_POST['username']);
    $email = mysqli_real_escape_string($_POST['email']);
    $password_1 = mysqli_real_escape_string($_POST['password_1']);
    $password_2 = mysqli_real_escape_string($_POST['password_2']);


    //ensure that fileds are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if (empty($password_1 != $password_2)) {
        array_push($errors, "The two passwords do not match");
    }

    //if there are no errors ,save user to db
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt pass before storing in db (sec)
        $sql = "INSERT INTO users (username, email, password) 
                            VALUES ('$username','$email','$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header("location : index.php"); //redirect to home page
    }
}
//redirect to home page


//log user in form login page 
if (isset($POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $password = mysqli_real_escape_string($db, $_POST['password']);

    //ensure that fileds are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username=$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location : index.php');
        } else {
            array_push($errors, "Wrong username /pass");
        }
    }
}
//logout
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
