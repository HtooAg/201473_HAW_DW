<?php
session_start();

include('dbConfig.php');

$name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
	header('location: ../dashboard.php?error=file');
	exit();
}

if ($type === "image/jpeg" || $type === "image/png") {
	$uploadPath = "photos/$name";
	move_uploaded_file($tmp, $uploadPath);

	$query = "SELECT * FROM users WHERE id = :id";
	$statement = $conn->prepare($query);
	$statement->execute(['id' => $_SESSION['id']]);
	$existingRecord = $statement->fetch(PDO::FETCH_ASSOC);

	if ($existingRecord) {
		$query = "UPDATE users SET photo = :photo WHERE id = :id";
		$statement = $conn->prepare($query);
		$statement->execute([':photo' => $uploadPath, ':id' => $_SESSION['id']]);
	} else {
		$query = "INSERT INTO users (photo) VALUES (:photo)";
		$statement = $conn->prepare($query);
		$statement->execute([':photo' => $uploadPath]);
	}

	header('location: ../dashboard.php');
	exit();
} else {
	header('location: ../dashboard.php?error=type');
	exit();
}
