<?php include 'header.php'; ?>

<?php 
		
    if (isset($_GET['published'])) {
        echo "<script>alert('Story Published Successfully!')</script>";
    }

    if (isset($_GET['not_published'])) {
        echo "<script>alert('Story Publishing Failed!')</script>";
    }
?>



<?php

error_reporting(0);
    
    if (isset($_POST['upload'])) {
    	$user_id = $session_id;
    	$firstname = $q_row['firstname'];
    	$lastname = $q_row['lastname'];
    	$title = escape_string($_POST['title']); 
    	$category = escape_string($_POST['category']);
        $story_text = escape_string($_POST['story_text']);
        $filename = escape_string($_FILES["uploadfile"]["name"]);  
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "image/".$filename;

        

        //insert into table; story

        $sql = "INSERT INTO story (user_id,firstname,lastname,title,category,story_text,image) VALUES ('$user_id','$firstname','$lastname','$title','$category','$story_text','$filename')";

        mysqli_query($connection, $sql);

        if (move_uploaded_file($tempname, $folder)) {
               
            header("location: index.php?published");
        } else {
            header("location: index.php?not_published");
        }
    }

 ?>



<section class="story-form">
	
<center>

	<h2>TELL STORY</h2>
	<p style="color: red">All fields are required</p>
		<form method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" placeholder="Enter Title" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Category</label>
				<div class="col-sm-10">
					<select class="form-control" name="category" required>
						<option>--Select--</option>
						<option value="Hospitality">Hospitality</option>
						<option value="Medicals">Medicals</option>
						<option value="Wild Life">Wild Life</option>
						<option value="Ecology">Ecology</option>
						<option value="Culture">Culture</option>
						<option value="Beach">Beach</option>
						<option value="Food">Food</option>
						<option value="Adventure">Adventure</option>
						<option value="Men and Women">Men and Women</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Upload Image</label>
				<div class="col-sm-10">
					<input type="file" name="uploadfile" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Write Story</label>
				<div class="col-sm-10">
					<textarea style="height: 200px;"  class="form-control" name="story_text" required>
					 </textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="upload">Publish Story</button>
				</div>

			</div>
			
		</form>
</center>
	
</section>

<?php include 'footer.php'; ?>