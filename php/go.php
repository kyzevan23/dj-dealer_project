<?php
	$userName = filter_var(trim($_POST['userName']),
FILTER_SANITIZE_STRING);
	$userPassword = filter_var(trim($_POST['userPassword']),
FILTER_SANITIZE_STRING);

	$userPassword = md5($userPassword."kashdb34iybf3ify");

	$mysql = new mysqli('localhost', 'root', 'root', 'registration');

	$result = $mysql->query("SELECT * FROM `users` WHERE `userName` = '$userName' AND `userPassword` = '$userPassword'");

	$user = $result->fetch_assoc();

	if(count($user) == 0){
		echo "<script>alert(\"Пользователь не найден\");</script>";
		exit();
	}

	setcookie('user', $user['userName'], time() + 3600, "/");

	$mysql->close();

	$admin = 'admin';

	if($userName == $admin){
		header('Location: /admin_page.php');
		exit();
	}

	header('Location: /market_menu.php');
?>