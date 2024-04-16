<?php

session_start();
include('./_actions/dbConfig.php');

if (!isset($_SESSION['id'])) {
	header("Location: login.php?error=not_loggined");
	exit();
}

if (isset($_POST['submit'])) {
	$user_id = $_SESSION['id'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$created_at = date('Y-m-d H:i:s');


	try {
		$stmt = $conn->prepare("INSERT INTO contact (user_id, phone, address, message, created_at) VALUES (:user_id, :phone, :address, :message, :created_at)");
		$stmt->execute(['user_id' => $user_id, 'phone' => $phone, 'address' => $address, 'message' => $message, 'created_at' => $created_at]);

		$_SESSION['success_message'] = "Message sent successfully! We will remind you soon!";
		header("Location: viewContact.php?id={$user_id}");
		exit();
	} catch (PDOException $e) {
		$error = "Database error: " . $e->getMessage();
	}
}
