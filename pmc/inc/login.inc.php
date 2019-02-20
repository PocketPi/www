<?php

require 'functions.inc.php';
require '../db_handler.php';

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
} else {
    header('Location: ../login.php');
    die();
}

if (empty($_POST["email"])) {
    header('Location: ../login.php?error=missing_email');
    die();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../login.php?error=invalid_email');
    die();
}

if (empty($_POST["password"])) {
    header('Location: ../login.php?error=missing_password');
    die();
}

$input_password = $_POST["password"]; // Creates a password hash

$sql = "SELECT id, name, password FROM members WHERE email = ?";
if($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $email);

    if(mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) == 1) { 
            mysqli_stmt_bind_result($stmt, $id, $name, $db_password);

            if(mysqli_stmt_fetch($stmt)) {
                if(password_verify($input_password, $db_password)) {
                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    $_SESSION["name"] = $name;
                } else {
                    echo "Wrong password";
                }
            }
        }
    }
} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
}

header('Location: ../index.php');

?>

