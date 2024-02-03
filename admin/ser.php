<?php

session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'drivvnet_drivex', 'Drivex12345!!', 'drivvnet_drivex');




	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
	
		if (count($errors) == 0) {
			//$password = md5($password);
			$query = "SELECT * FROM admin WHERE email='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (!$results || mysqli_num_rows($results) == 1)
				$_SESSION['login'] = $username;
				
			$_SESSION['success'] = "You are now logged in";
				header('location: admin.php');
				exit();
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	

?>




'localhost', 'drivvnet_drivex', 'Drive12345!', 'drivvnet_drivex'
