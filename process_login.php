<?php
include("session.php");

$user = $_POST["username"];
$pass = $_POST["password"];

if ( $user != "" && $pass != "" ) {
	$sess->logIn($user,$pass);
} else {
	header ("Location: login.php");
}
?>
