<?php 
session_start();
ob_start();
include 'include/dbconnect.php'; ?>
<?php include 'include/function.php'; ?>


<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $resultSet = query("SELECT password FROM user WHERE email='$email'");
    confirm($resultSet);
    $qs_row = fetch_array($resultSet); 
}


?>


<?php include 'header.php'; ?>


<div style="text-align: center; margin-top: 3%; padding: 4px;">
    <?php 
        if (isset($_SESSION['status'])) {
            echo "<h4 style='color:red'>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
    ?>
</div>

<section class="login-form">
	<div class="login-form-overlay">
<center>

	<h2>SET NEW PASSWORD</h2>
		<form method="POST" action="" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Enter New Password" minlength="8" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="newpassword">Change password</button>
				</div>
			</div>
			
		</form>
</center>
		
	</div>
</section>


<?php
        if (isset($_POST['newpassword'])) {
            $password = escape_string($_POST['password']);
            $password = md5($password);

            $rp = query("UPDATE user SET password='$password' WHERE email='$email'");
            confirm($rp);
            $_SESSION['reset'] = "Your password has been changed successfully, proceed to login";
            header("location: login.php");
        }

    ?>

<?php include 'footer.php'; ?>