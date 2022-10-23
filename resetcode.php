<?php 
session_start();
include 'include/dbconnect.php'; ?>
<?php include 'include/function.php'; ?>


<?php 

	if (isset($_POST['reset'])) {
		$email = escape_string($_POST['email']);

		//retrieve email address from table
		
		$check_email = query("SELECT email FROM user WHERE email='$email'");
		confirm($check_email);
		//check if email address exist
		if (mysqli_num_rows($check_email)) {
		// if it exist, send the below  email to the address
		 $to = $email;
		 $subject = "Reset Password";
		 $message = "
		 Scottish Tourism Organisation \r\n
		 You have requested to change your password  \r\n
    	 Click the link below to proceed \r\n
		 https://domainname.com/reset.php?email=$email    ";
		 $headers = "From: support@scotorg.com";
		 mail($to, $subject, $message, $headers);
		 $_SESSION['status'] = "We have sent a password reset link to your email";
	     header("location: reset-password.php");
		} else {
		    $_SESSION['status'] = "Email is not Registered";
	     header("location: reset-password.php");
		}
		   


	}

	
?>