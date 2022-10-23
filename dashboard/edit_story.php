<?php ob_start(); ?>

<?php include 'header.php'; ?>


<?php
$story_id = $_GET['id'];
	 $m_q = query("SELECT * FROM story WHERE id='$story_id'");
    confirm($m_q);
    $s_row = fetch_array($m_q);

 ?>

 <?php

error_reporting(0);

 	if (isset($_POST['edit'])) {
 		$title = escape_string($_POST['title']);
    	$category = escape_string($_POST['category']);
    	$story_text = escape_string($_POST['story_text']);
        $filename = escape_string($_FILES["uploadfile"]["name"]);
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "image/".$filename;

        // update query

			 	$qe = query("UPDATE story SET title='$title', category='$category', story_text='$story_text', image='$filename' WHERE id='$story_id'");
			 	confirm($qe);

			 if (move_uploaded_file($tempname, $folder)) {
             
            header("location: manage_story.php?edited");
        } else {
            header("location: manage_story.php?not_edited");
        }
			 	
			 		
			 	}

			  ?>

<section class="story-form">
	
<center>

	<h2>MANAGE STORY</h2>

	<p style="color: red">All fields are required</p>
		<form method="post" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="<?php echo $s_row['title'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Category</label>
				<div class="col-sm-10">
					<select type="text" class="form-control" name="category" required>
						<option><?php echo $s_row['category'] ?></option>
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

			<img src="image/<?php echo $s_row['image']; ?>" class='my-3' style='width:70%;height:250px'>

			<div class="form-group">
				<label class="control-label col-sm-12">Upload Image</label>
				<div class="col-sm-10">
					<input type="file" name="uploadfile" value="<?php echo $s_row['image'] ?>" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Write Story</label>
				<div class="col-sm-10">
					<textarea style="height: 200px;"  class="form-control" name="story_text" required>
						<?php echo $s_row['story_text'] ?>
					 </textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-danger" name="edit">EDIT Story</a></button>
				</div>

			</div>
			
		</form>
</center>
	
</section>



<?php include 'footer.php'; ?>