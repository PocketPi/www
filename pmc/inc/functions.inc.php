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

?>