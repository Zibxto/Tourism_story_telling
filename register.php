<?php 
session_start();
    if (isset($_GET['email_exist'])) {
     echo "<script>alert('Email already in use, try another!')</script>";
 }

?>

<?php include 'header.php'; ?>

<div style="text-align: center; margin-top: 3%; padding: 4px;">
    <?php 
        if (isset($_SESSION['status'])) {
            echo "<h4 style='color: red'>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
    ?>
    </div>

<section class="login-form">
	<div class="login-form-overlay">
<center>

	<h2>SIGN UP</h2>
		<form method="post" action="regcode.php" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Last Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Enter Password" minlength="8" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="register">Sign Up</button>
				</div>
				<div class="col-sm-12">
					<a href="login.php" style="color: #f2f2f2;">Already have an account?</a>
				</div>
			</div>
			
		</form>
</center>
		
	</div>
</section>

<?php include 'footer.php'; ?>