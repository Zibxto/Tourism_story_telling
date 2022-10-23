<?php ob_start(); ?>

<?php include 'header.php'; ?>


<?php
$user_id = $_GET['id'];
	 $m_q = query("SELECT * FROM user WHERE id='$user_id'");
    confirm($m_q);
    $s_row = fetch_array($m_q);

 ?>

<section class="story-form" style="width: 60%">
	
<center>

	<h2>EDIT   MEMBER INFO</h2>

	<p style="color: red">All fields are required</p>
		<form method="post" action="" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="firstname" value="<?php echo $s_row['firstname'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Last Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="lastname" value="<?php echo $s_row['lastname'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Email</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="email" value="<?php echo $s_row['email'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="edit">EDIT MEMBER</a></button>
				</div>

			</div>
			
		</form>
</center>
	
</section>

<?php

 	if (isset($_POST['edit'])) {
 		$firstname = escape_string($_POST['firstname']);
    	$lastname = escape_string($_POST['lastname']);
        $email = escape_string($_POST['email']);

        // update query

			 	$qe = query("UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$user_id'");
			 	confirm($qe);

			 	 if ($qe) {
            header("location: index.php?edited");
        } else {
            header("location: index.php?not_edited");
        }
			 	
			 		
			 	}

			  ?>

<?php include 'footer.php'; ?>