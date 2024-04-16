<?php

session_start();
include 'dbConfig.php';


if (isset($_POST['submit']) && isset($_GET['id'])) {
	$id = $_GET['id'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$updated_at = date('Y-m-d H:i:s');

	$user_id = $_SESSION['id'];
	$sql = "SELECT role FROM users WHERE id = :user_id";
	$stmt = $conn->prepare($sql);
	$stmt->execute(['user_id' => $user_id]);
	$user_role = $stmt->fetch(PDO::FETCH_ASSOC)['role'];

	if ($user_role === 'Admin' || $_SESSION['id'] == $id) {
		try {
			$sql = "UPDATE users SET first_name=:firstname, last_name=:lastname, email=:email, username=:username, password=:password, updated_at=:updated_at WHERE id=:id";
			$stmt = $conn->prepare($sql);
			$result = [
				':id' => $id,
				':firstname' => $firstname,
				':lastname' => $lastname,
				':email' => $email,
				':username' => $username,
				':password' => $password,
				':updated_at' => $updated_at,

			];
			$stmt->execute($result);

			$_SESSION['success_message'] = "Updated successfully!";
			header("Location: ../viewUsers.php");
			exit();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
			exit();
		}
	} else {
		echo "You are not authorized to perform this action.";
		exit();
	}
} else {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id=:id";
		$stmt = $conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$user = $stmt->fetch();
	}
}

$id = $_GET['id'] ?? null;
$user = [];
if ($id) {
	$sql = "SELECT * FROM users WHERE id=:id";
	$stmt = $conn->prepare($sql);
	$stmt->execute([':id' => $id]);
	$user = $stmt->fetch();
}

$conn = null;
