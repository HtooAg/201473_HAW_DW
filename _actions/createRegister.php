<?php
session_start();

$success = "";

if (isset($_POST['submit'])) {
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$created_at = date('Y-m-d H:i:s');

	try {
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = $conn->query($sql);
		if ($result->rowCount() > 0) {
			$error = "Username already exists.";
		} else {
			$sql = "INSERT INTO users (first_name, last_name, email, username, password, created_at) 
                    VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$created_at')";
			if ($conn->exec($sql)) {
				$_SESSION['username'] = $username;
				$_SESSION['success_message'] = "Registration completed! Please Login.";
				header("Location: login.php");
				exit();
			} else {
				$error = "Error: Unable to register user.";
			}
		}
	} catch (PDOException $e) {
		$error = "Database error: " . $e->getMessage();
	}
}
