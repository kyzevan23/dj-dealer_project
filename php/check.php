<?php
	$userName = filter_var(trim($_POST['userName']),
FILTER_SANITIZE_STRING);
	$userPassword = filter_var(trim($_POST['userPassword']),
FILTER_SANITIZE_STRING);
	$userEmail = filter_var(trim($_POST['userEmail']),
FILTER_SANITIZE_STRING);

	if (mb_strlen($userName) < 5 || mb_strlen($userName) > 90) {
		echo "<script>alert(\"Недопустимая длина имени пользователя\");</script>";
		exit();
	} else if (mb_strlen($userName) < 2 || mb_strlen($userName) > 15) {
		echo "<script>alert(\"Недопустимая длина пароля (от 2 до 15 символов)\");</script>";
		exit();
	}

	$userPassword = md5($userPassword."kashdb34iybf3ify");

	$mysql = new mysqli('localhost', 'root', 'root', 'registration');

	$mysql->query("INSERT INTO `users` (`userName`, `userPassword`, `userEmail`) VALUES('$userName', '$userPassword', '$userEmail')");

	$mysql->close();

	header('Location: /authorisation.php');

?>
