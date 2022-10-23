<?php  include 'header.php'; ?>



<?php
			$request = $_REQUEST['id'];
			if(isset($_REQUEST['id'])){
				$query = query("SELECT * FROM story WHERE id='$request'");
				confirm($query);
				$fetch = fetch_array($query);
		?>
				<div style="text-align: center;">
				<h2 style="color: blue; margin-bottom: 8px; font-family: verdana;"><?php echo $fetch['title']?></h2>
				<p style="color: #222;"><?php echo nl2br($fetch['story_text'])?></p>
				</div>
		<?php
			}
		?>


<?php  include 'footer.php'; ?>