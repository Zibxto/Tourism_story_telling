<?php 
include 'include/dbconnect.php';
include 'include/session.php';
include 'include/function.php'; 
?>

<?php
//SESSION['id'] has already been reassigned to $session_id in session.php page

$c_r = query("SELECT * FROM user WHERE id='$session_id'");
confirm($c_r);
$r_row = fetch_array($c_r);

//rank is a column in the user table; 1 for admin and 0 for other clients

if ($r_row['rank'] == 1) {

				 header("location: admin");
			}
			else if ($r_row['rank'] == 0) {
				header("location: dashboard");
				
			} else {
			    $_SESSION['verified'] = "You are not a registered member, kindly register to login";
			    header("location: login.php");
			}

?>