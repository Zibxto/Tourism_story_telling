<?php
	include('include/dbconnect.php'); 
	include 'include/function.php';

?>


<?php

	if (isset($_POST['login'])) {
		$email = escape_string($_POST['email']); 
		$password = escape_string($_POST['password']);
		$password = md5($password);
		//retrieve query
		$query = query("SELECT * FROM user WHERE email='$email' AND password='$password'");
		confirm($query);
		$row = fetch_array($query);
		//check if there is an available row(s) in table
		if (mysqli_num_rows($query) > 0) {
			session_start();
			session_regenerate_id();
			$_SESSION['id'] = $row['id'];
			header("location: client_redirect.php");
			session_write_close();
			exit();

		}
		else {
				header("location: login.php?login=invalid");	
				session_write_close();
				exit();
			}
		
	}

?>