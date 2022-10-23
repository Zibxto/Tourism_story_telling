<?php ob_start(); ?>
<?php 

	if (isset($_GET['deleted'])) {
        echo "<script>alert('Story deleted Successfully!')</script>";
    }
		
    if (isset($_GET['edited'])) {
        echo "<script>alert('Member Edited Successfully!')</script>";
    }

    if (isset($_GET['not_edited'])) {
        echo "<script>alert('Member Editing Failed!')</script>";
    }
?>

<?php 
        
    if (isset($_GET['s_published'])) {
        echo "<script>alert('Story Published Successfully to Public!')</script>";
    }

    if (isset($_GET['not_s_published'])) {
        echo "<script>alert('Story Publishing to public Failed!')</script>";
    }
?>


<?php 
        
    if (isset($_GET['s_hide'])) {
        echo "<script>alert('Story hidden Successfully from Public!')</script>";
    }

    if (isset($_GET['not_s_hide'])) {
        echo "<script>alert('Hiding Story from public failed!')</script>";
    }
?>

<?php include 'header.php'; ?>




<section class="card mx-2 my-4">
    <div class="table-responsive">
        <table class="table table-hover table-borderless table-striped">
            <thead class="card-head">
              <tr class="btn-primary" style="padding: 8px;">
                <th scope="col" style="color: #f2f2f2;">First Name</th>
                <th scope="col" style="color: #f2f2f2;">Last Name</th>
                <th scope="col" style="color: #f2f2f2;">Published</th>
                <th scope="col" style="color: #f2f2f2;">Story Title</th>
                <th scope="col" style="color: #f2f2f2;">Story Category</th>
                <th scope="col" style="color: #f2f2f2;">Time</th>
                <th scope="col" style="color: #f2f2f2;">View</th>
                <th scope="col" style="color: #f2f2f2;">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $m_q = query("SELECT * FROM story ORDER BY id DESC");
    confirm($m_q); 

    while ($row = fetch_array($m_q)) {
        $story_id = $row['id'];
       
    
     ?>
               
              <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>

                <td>
    <?php
            if ($row['rank'] == '1') {
                echo "Yes";
            } else {
                echo "No";
            }

     ?>

                </td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td>
                    <a href="view_story.php<?php echo '?id='.$story_id; ?>" class="btn btn-primary" style="overflow: hidden;">View</a>
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