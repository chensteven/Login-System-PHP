<?php
session_start();
function logOut() {
	$_SESSION = array();
	unset($_SESSION);
	session_destroy();
	header('Location: index.php');
	exit();
}
logOut();
?>