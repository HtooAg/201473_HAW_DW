<?php

session_start();

include 'dbConfig.php';
$is_admin = false;

function isUserLocked()
{
	if (isset($_SESSION['login_locked']) && $_SESSION['login_locked'] > time()) {
		return true;
	}
	return false;
}

if (isset($_SESSION['login_locked']) && $_SESSION['login_locked'] < time()) {
	unset($_SESSION['login_locked']);
	unset($_SESSION['login_attempts']);
}

if (isset($_GET['error']) && $_GET['error'] === 'not_loggined') {
	$err = "You need to login first!";
	unset($_GET['error']);
}

if (isset($_POST['submit'])) {
	if (isUserLocked()) {
		$error = "Login is locked. Please try again later.";
	} else {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		try {
			$stmt = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
			$stmt->execute(['username' => $username, 'password' => $password]);
			$row = $stmt->fetch();

			if ($row) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $row['email'];
				$_SESSION['password'] = $password;

				$role = $row['role'];
				$_SESSION['role'] = $role;

				if ($role === 'Admin') {
					$_SESSION['is_admin'] = true;
				}

				unset($_SESSION['login_attempts']);

				$_SESSION['success_message'] = "Welcome, " . $username . "!";
				if (isset($_SESSION['username'])) {
					header("Location: home.php?username=" . $_SESSION['username']);
				}
				exit();
			} else {
				$_SESSION['login_attempts'] = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] + 1 : 1;
				if ($_SESSION['login_attempts'] >= 3) {
					$_SESSION['login_locked'] = time() + (60 * 10);
					$error = "Login failed. Your account is locked for 10 minutes.";
				} else {
					$error = "Invalid username or password.";
				}
			}
		} catch (PDOException $e) {
			$error = "Database error: " . $e->getMessage();
		}
	}
}
