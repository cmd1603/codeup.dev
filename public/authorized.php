<?php
session_start();

function pageController(){


	if(isset($_SESSION['logged_in_user'])) {
		$username = $_SESSION['logged_in_user'];
		echo $username;
	} else {
		header('Location: login.php');
		exit;
	}
}

pageController();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>You Are So Official, All You Need Is A Whistle</h1>
	<a href="logout.php">Logout</a>
</body>
</html>