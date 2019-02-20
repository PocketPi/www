<?php

require 'functions.inc.php';
require '../db_handler.php';

$email = $name = $birthdate = $address = $zipcode = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = test_input($_POST["email"]);
	$name = test_input($_POST["name"]);
	$birthdate = test_input($_POST["birthdate"]);
	$address = test_input($_POST["address"]);
	$zipcode = test_input($_POST["zipcode"]);
} else {
	header('Location: ../register.php');
	die();
}

if (empty($_POST["email"])) {
	header('Location: ../register.php?error=missing_email');
	die();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header('Location: ../register.php?error=invalid_email');
	die();
}

if (empty($_POST["name"])) {
	header('Location: ../register.php?error=missing_name');
	die();
}

if (!preg_match("/^[a-åA-Å ]*$/",$name)) {
	header('Location: ../register.php?error=invalid_name');
	die();
}

if (empty($_POST["password"])) {
	header('Location: ../register.php?error=missing_password');
	die();
}

if ($_POST["password"] != $_POST["password_repeat"]) {
	header('Location: ../register.php?error=password_match_error');
	die();
}

if (!verify_password($_POST["password"])) {
	header('Location: ../register.php?error=password_strenth_error');
	die();
}

$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Creates a password hash

$sql = "INSERT INTO members (email, name, birthdate, address, zipcode, password) VALUES (?, ?, ?, ?, ?, ?)";
if($stmt = mysqli_prepare($conn, $sql)) {
	mysqli_stmt_bind_param($stmt, "ssssss", $email, $name, $birthdate, $address, $zipcode, $password);
	mysqli_stmt_execute($stmt);

	print_r($stmt->error_list);

	mysqli_stmt_close($stmt);

} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
}

header('Location: ../index.php');




?>

