<?php
session_start();
include 'dbConfig.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$user_id = $_SESSION['id'];

	$sql = "SELECT role FROM users WHERE id = :user_id";
	$stmt = $conn->prepare($sql);
	$stmt->execute(['user_id' => $user_id]);
	$user_role = $stmt->fetch(PDO::FETCH_ASSOC)['role'];

	if ($user_role === 'Admin' || $user_id == $id) {
		try {
			$sql_delete = "DELETE FROM contact WHERE user_id = :id";
			$stmt_delete = $conn->prepare($sql_delete);
			$stmt_delete->execute(['id' => $id]);
			header("Location: ../viewContact.php");
			exit();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
			exit();
		}
	} else {
		echo "You are not authorized to perform this action.";
		exit();
	}
}

$conn = null;
