<?php

function pageController()
{
	$data = [];

	$data['username'] = (!empty($_POST['username'])) ? $_POST['username'] : ' ';
	$data['password']  = (!empty($_POST['password'])) ? $_POST['password'] : ' ';
	

	if (($data['username'] == "username") && ($data['password'] == "password")) {
		header('Location: /authorized.php');
	}elseif ((!empty($_POST) && ($data['username'] != "username")) || (!empty($_POST) && ($data['password'] != "password"))) {
		echo "please enter valid Username and Password";
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