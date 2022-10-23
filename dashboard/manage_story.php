<?php ob_start(); ?>
<?php 

	if (isset($_GET['deleted'])) {
        echo "<script>alert('Story deleted Successfully!')</script>";
    }
		
    if (isset($_GET['edited'])) {
        echo "<script>alert('Story Edited Successfully!')</script>";
    }

    if (isset($_GET['not_edited'])) {
        echo "<script>alert('Story Editing Failed!')</script>";
    }
?>

<?php include 'header.php'; ?>




<section class="card mx-4 my-4">
    <div class="table-responsive">
        <table class="table table-hover table-borderless table-striped">
            <thead class="card-head">
              <tr class="btn-primary" style="padding: 4px;">
                <th scope="col" style="color: #f2f2f2;">Story Title</th>
                <th scope="col" style="color: #f2f2f2;">Publication  Time</th>
                <th scope="col" style="color: #f2f2f2;">Edit</th>
                <th scope="col" style="color: #f2f2f2;">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $m_q = query("SELECT * FROM story WHERE user_id='$session_id' ORDER BY id DESC");
    confirm($m_q); 

    while ($row = fetch_array($m_q)) {
        $story_id = $row['id'];
       
    
     ?>
               
              <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td>
                    <a href="edit_story.php<?php echo '?id='.$story_id; ?>" class="btn btn-primary" style="overflow: hidden;">Edit</a>
                </td>
                <td>
                    <a href="<?php echo '?delete='.$story_id; ?>" class="btn btn-danger" style="overflow: hidden;">Delete</a>
                </td>
              </tr>
      <?php

 }

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM story WHERE id='$story_id'");
            confirm($qy);
            header('location: manage_story.php?deleted');
        }  

  ?>
            </tbody>
        </table>
    </div>
</section>


<?php include 'footer.php'; ?>