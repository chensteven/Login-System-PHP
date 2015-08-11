<?php include "config.php" ?>
<?php require_once "class-user.php";?>
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['username'])) {
		$username = $_POST['username'];
	} else {
		$errorMessage = "No username provided";
		$username = "";
	}
	if(!empty($_POST['password'])) {
		$password = $_POST['password'];
	} else {
		$errorMessage = "No password provided";
		$password = "";
	}
	// Database
	$connection = db_connect();
	$username = validate_data($connection, $username);
	$password = validate_data($connection, $password);

	$sql = "Select * from users where username = '".$username."' and password = '".$password."'";
	$result = db_select($connection, $sql);

	if($result) {
		$_SESSION['authenticated'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('Location: index.php');
	} else {
		header('Location: index.php');
	} 
}
/**
*	Make connection to the mySQL Server
*/
function db_connect() {
	$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($connection->connect_error) {
		die("Database Connection failed: ". $connection->connect_error);
	} 
	return $connection;
}

/**
*	Insert into the database
*/
function db_insert($connection, $sql) {
	if ($connection->query($sql) === TRUE) {
		echo ('Inserted Data');
	}
	else {
		echo ('Error: '. $sql . "<br>" . $connection->error);
	}
}

/**
*  Select from the database
*/
function db_select($connection, $sql) {
	$result = $connection->query($sql);
	if (!$result->num_rows == 1) {
		return false;
	}
	else {
		while($row = $result->fetch_assoc()) {
			return $row;
		}
	}
}
function validate_data($connection, $data) {
	$data = trim($data);
	$data = $connection->real_escape_string($data);
	return $data;
}
?>

