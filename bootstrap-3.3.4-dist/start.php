<?php
	
	session_start();

	if(!empty($_POST['firstname'])){
		$name = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		#check that all details are provided

		if(!empty($name) && !empty($email) && !empty($password)){
			#insert i&& !empty($email)nto DB
			echo $name;

		} else {
			#reload start2.php with error flags
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			header("location: start2.php");
		}

		#check that the passwords match

	} else {
		header("location: start2.php");

	}

?>