<?php 
session_start();

if (isset($_GET['login'])) {
        if ($_GET['login'] == 'invalid') {
            echo "<script>alert('Email or Password Incorrect!')</script>";
        }
    }

    if (isset($_GET['signout'])) {
        echo "<script>alert('Sign out Successful!')</script>";
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


<div style="text-align: center; margin-top: 3%; padding: 4px;">
    <?php 
        if (isset($_SESSION['verified'])) {
            echo "<h4 style='color:red'>".$_SESSION['verified']."</h4>";
            unset($_SESSION['verified']);
        }
    ?>
</div>


<div style="text-align: center; margin-top: 3%; padding: 4px;">
    <?php 
        if (isset($_SESSION['reset'])) {
            echo "<h4 style='color:red'>".$_SESSION['reset']."</h4>";
            unset($_SESSION['reset']);
        }
    ?>
</div>

<section class="login-form">
	<div class="login-form-overlay">
<center>

	<h2>SIGN IN</h2>
		<form method="post" action="logincode.php" class="form-horizontal">
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
					<button type="submit" class="btn btn-danger" name="login">Sign In</button>
				</div>

				<div class="col-sm-12">
					<a href="reset-password.php" style="color: gold; font-size: 16px;">Forgot password?</a>
				</div>

				<div class="col-sm-12">
					<a href="register.php" style="color: #f2f2f2;">Don't have an account? Sign up</a>
				</div>
			</div>
			
		</form>
</center>
		
	</div>
</section>

<?php include 'footer.php'; ?>