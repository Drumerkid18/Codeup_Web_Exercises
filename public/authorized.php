<?php
session_start();

if (!$_SESSION['LOGGED_IN_USER']) {
		header('Location: login.php');
		exit();
	}

?>

<html>
	<body>
		<h1>Authorized</h1>
		<h1> <?= $_SESSION['LOGGED_IN_USER'] ?></h1>
		<h1> <?= $_SESSION['sessionId'] ?></h1>
		<a href="logout.php">Logout</a>
	</body>
</html>