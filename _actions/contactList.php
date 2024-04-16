<?php
session_start();
include 'dbConfig.php';

if (!isset($_SESSION['id'])) {
	header("Location: login.php?error=not_loggined");
	exit();
}

$user_id = $_SESSION['id'];

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
	$id = $_GET['id'];
	if ($user_id == $id) {
		try {
			$sql = "DELETE FROM contact WHERE id=:id";
			$stmt = $conn->prepare($sql);
			$stmt->execute([':id' => $id]);
			header("Location: viewContact.php");
			exit();
		} catch (PDOException $e) {
			$error = "Database error: " . $e->getMessage();
		}
	}
}

try {
	// Select all the messages joining with users table
	$sql = "SELECT c.*, u.first_name, u.last_name, u.email,
			u.username, u.photo, u.role FROM contact c
            INNER JOIN users u ON c.user_id = u.id
            ";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$contact = $stmt->fetchAll();

	// Selecting the contact count for the logged-in user
	$sql_count = "SELECT COUNT(*) as contact_count FROM contact";
	$stmt_count = $conn->prepare($sql_count);
	$stmt_count->execute();
	$contact_count = $stmt_count->fetch(PDO::FETCH_ASSOC)['contact_count'];

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

// var_dump($_SESSION['id']);
