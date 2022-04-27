<?php
	if($_COOKIE['user'] == ''){
		echo "<script>alert(\"Чтобы получить доступ к магазину - авторизуйтесь!\");</script>";
		exit();
	}

	header('Location: /market_menu.php');
?>