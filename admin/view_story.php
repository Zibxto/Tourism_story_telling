<?php ob_start(); ?>
<?php include 'header.php'; ?>

<?php
$story_id = $_GET['id'];

//retrieving data
	 $m_q = query("SELECT * FROM story WHERE id='$story_id'");
    confirm($m_q);
    $v_row = fetch_array($m_q);

 ?>


<section class="story-form">
	
<center>

	<h2>REVIEW AND PUBLISH STORY</h2>
	<p style="color: red">All fields are required</p>
		<form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-12">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="<?php echo $v_row['title']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-12">Category</label>
				<div class="col-sm-10">
					<select class="form-control" name="category" required>
						<option><?php echo $v_row['category']; ?></option>
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
					<img src="../dashboard/image/<?php echo $v_row['image']; ?>" class='my-3' style='width:70%;height:250px'>

			<div class="form-group">
				<label class="control-label col-sm-12">Write Story</label>
				<div class="col-sm-10">
					<textarea style="height: 200px;"  class="form-control" name="story_text" required>
					<?php echo $v_row['story_text']; ?>
					 </textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary" name="publish">Publish Story to Public</button>

					<button type="submit" class="btn btn-danger" name="hide">Hide Story from Public</button>
				</div>

			</div>
			
		</form>
</center>
	
</section>



	<?php

	//processing publish functionality

error_reporting(0);

 	if (isset($_POST['publish'])) {
 		$title = escape_string($_POST['title']);
    	$category = escape_string($_POST['category']);
        $story_text = escape_string($_POST['story_text']);
        $rank = '1';

        // update query

			 	$qe = query("UPDATE story SET rank='$rank', title='$title', category='$category', story_text='$story_text' WHERE id='$story_id'");
			 	confirm($qe);

			 	 if ($qe) {
             
            header("location: manage_story.php?s_published");
        } else {
            header("location: manage_story.php?not_s_published");
        }
			 	
			 		
			 	}

			  ?>


<?php
//processing hide from public functionality

if (isset($_POST['hide'])) {
	$rank = '0';

	// update query

			 	$qh = query("UPDATE story SET rank='$rank' WHERE id='$story_id'");
			 	confirm($qh);

			 	 if ($qh) {
             
            header("location: manage_story.php?s_hide");
        } else {
            header("location: manage_story.php?not_s_hide");
        }
}


 ?>


<?php include 'footer.php'; ?>