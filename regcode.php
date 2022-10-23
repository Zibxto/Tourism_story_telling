<?php 
session_start();
include 'include/dbconnect.php'; ?>
<?php include 'include/function.php'; ?>


<?php 

	if (isset($_POST['register'])) {
		$firstname = escape_string($_POST['firstname']);
		$lastname = escape_string($_POST['lastname']);
		$email = escape_string($_POST['email']);
		$password = escape_string($_POST['password']);
		//encrypt password
		$password = md5($password);

		//check for existing email in db
		
		$check_email = query("SELECT email FROM user WHERE email='$email' LIMIT 1");
		confirm($check_email);
		
		if (mysqli_num_rows($check_email) > 0) {
		    header("location: register.php?email_exist");
		} else {
		    //insert into db
		    $sql = query("INSERT INTO user(firstname, lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')");
		
		confirm($sql);
		 if ($sql) {
		 $_SESSION['status'] = "Thank you for registering, enter email and password to login";
	     header("location: login.php");
		} else {
		    $_SESSION['status'] = "Registration Failed, try again.";
	     header("location: register.php");
		}
		    
		}

	}

	?>