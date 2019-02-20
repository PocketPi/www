<?php

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function verify_password($password) {
	$rc = true;

	if(strlen($password) < 8) {
		$rc = false;
	}

	return $rc;
}

function get_motorcycle($owner) {
	require 'db_handler.php';
	$motorcycle = "";
	$sql = "SELECT * FROM motorcycles WHERE owner = " . $owner;
	if ($result=mysqli_query($conn,$sql)) {
	    while($row = mysqli_fetch_assoc($result)){
	        $motorcycle = $row["make"] . " " . $row["model"] . " " .$row["notes"] . " ICON HERE " . $motorcycle;
	    }
	}
	return $motorcycle;
}

?>
