<?php 
session_start();
include 'header.php'; ?>


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

	<h2>RESET PASSWORD</h2>
		<form method="post" action="resetcode.php" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Enter Email">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="reset">Reset</button>
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