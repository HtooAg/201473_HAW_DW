<?php

session_start();
include('./_actions/dbConfig.php');


try {
	if (isset($_SESSION['id'])) {
		$sql = "SELECT * FROM users WHERE id=:id";
		$stmt = $conn->prepare($sql);
		$stmt->execute(['id' => $_SESSION['id']]);
		$users = $stmt->fetchAll();

		$query = "SELECT photo FROM users WHERE id = :id";
		$statement = $conn->prepare($query);
		$statement->execute(['id' => $_SESSION['id']]);
		$imageRow = $statement->fetch(PDO::FETCH_ASSOC);
		$profileImage = isset($imageRow['photo']) ? $imageRow['photo'] : '';

		$conn = null;
	}
} catch (PDOException $e) {
	$error = "Database error: " . $e->getMessage();
	$conn = null;
}

// var_dump($_SESSION['id']);
