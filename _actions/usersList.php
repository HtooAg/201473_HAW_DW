<?php
session_start();
include 'dbConfig.php';

$is_admin = false;

if (isset($_SESSION['id'])) {
	$userId = $_SESSION['id'];
	$sql = "SELECT role FROM users WHERE id = :id";
	$stmt = $conn->prepare($sql);
	$stmt->execute([':id' => $userId]);
	$user = $stmt->fetch();

	if ($user && $user['role'] == 'Admin') {
		$is_admin = true;
	}
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
	$id = $_GET['id'];
	if ($is_admin || ($_SESSION['id'] == $id)) {
		try {
			$sql = "DELETE FROM users WHERE id=:id";
			$stmt = $conn->prepare($sql);
			$stmt->execute([':id' => $id]);
			header("Location: viewUsers.php");
			exit();
		} catch (PDOException $e) {
			$error = "Database error: " . $e->getMessage();
		}
	}
}

try {
	// Selecting all users
	$sql = "SELECT * FROM users";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$users = $stmt->fetchAll();

	// Selecting the users with count
	$stmt = $conn->query("SELECT COUNT(id) as user_count FROM users");
	$user_count = $stmt->fetch(PDO::FETCH_ASSOC)['user_count'];

	// Selecting current user with photo
	$userId = $_SESSION['id'];
	$query = "SELECT photo FROM users WHERE id = :id";
	$statement = $conn->prepare($query);
	$statement->execute(['id' => $userId]);
	$imageRow = $statement->fetch(PDO::FETCH_ASSOC);
	$profileImage = isset($imageRow['photo']) ? $imageRow['photo'] : '';

	$conn = null;
} catch (PDOException $e) {
	$error = "Database error: " . $e->getMessage();
	$conn = null;
}
