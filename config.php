<?php
session_start();

$db = new mysqli("localhost", "root", "", "git");


function user_is_unique($email) {
	global $db;

	$query = "SELECT * FROM registration WHERE email = '$email'"; //vai sakrīt
	$query = $db->query($query);

	return !$query->num_rows;

}

function get_error($class, $message) {
	return '<div class="container"><div class="alert alert-'.$class.'" role="alert">'.$message.'</div></div>';
}
?>