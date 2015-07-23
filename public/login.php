<?php

session_start();
$_SESSION['sessionId'] = session_id();

var_dump($_SESSION['sessionId']);

if (isset($_SESSION['LOGGED_IN_USER'])) {
	if ($_SESSION['LOGGED_IN_USER']) {
		header('Location: authorized.php');
		exit();
	}
}else{
	$_SESSION['LOGGED_IN_USER'] = false;
}

function pageController()
{
	$data = [];


	$data['username'] = (!empty($_POST['username'])) ? $_POST['username'] : ' ';
	$data['password']  = (!empty($_POST['password'])) ? $_POST['password'] : ' ';
	
	var_dump($data['username']);

	if (($data['username'] == "username") && ($data['password'] == "password")) {
		$_SESSION['LOGGED_IN_USER'] = true;

	}elseif ((!empty($_POST) && ($data['username'] != "username")) || (!empty($_POST) && ($data['password'] != "password"))) {
		echo "please enter valid Username and Password";
		$_SESSION['LOGGED_IN_USER'] = false;
	}
	if ($_SESSION['LOGGED_IN_USER']) {
		header('Location: authorized.php');
		exit();
	}

	return $data;

}


extract(pageController());


?>


<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST" action="/login.php">
        <label>Userame</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>