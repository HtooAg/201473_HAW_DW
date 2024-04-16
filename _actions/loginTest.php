<?php

$isLoggedIn = isset($_SESSION['username']);

if ($isLoggedIn) {
	$buttonLink = "_actions/logout.php";
	$showLoginButton = false;
} else {
	$buttonLink = "login.php";
	$showLoginButton = true;
}
