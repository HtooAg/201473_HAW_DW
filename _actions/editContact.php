<?php

session_start();
include 'dbConfig.php';

if (isset($_POST['submit']) && isset($_GET['id'])) {
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$updated_at = date('Y-m-d H:i:s');

	$id = $_GET['id'];

	$user_id = $_SESSION['id'];
	$sql = "SELECT role FROM users WHERE id = :user_id";
	$stmt = $conn->prepare($sql);
	$stmt->execute(['user_id' => $user_id]);
	$user_role = $stmt->fetch(PDO::FETCH_ASSOC)['role'];

	if ($user_role === 'Admin' || $_SESSION['id'] == $id) {
		try {
			$sql = "UPDATE contact SET phone=:phone, address=:address, message=:message, updated_at=:updated_at WHERE user_id=:id";
			$stmt = $conn->prepare($sql);
			$result = [
				':id' => $id,
				':phone' => $phone,
				':address' => $address,
				':message' => $message,
				':updated_at' => $updated_at,
			];
			$stmt->execute($result);
			$_SESSION['success_message'] = "Updated successfully! We will remind you soon!";
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
} else {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM contact WHERE user_id=:id";
		$stmt = $conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$contact = $stmt->fetch();
	}
}

$id = $_GET['id'] ?? null;
$contact = [];
if ($id) {
	$sql = "SELECT * FROM contact WHERE user_id=:id";
	$stmt = $conn->prepare($sql);
	$stmt->execute([':id' => $id]);
	$contact = $stmt->fetch();
}

$conn = null;
