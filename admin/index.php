<?php ob_start(); ?>
<?php 

	if (isset($_GET['deleted'])) {
        echo "<script>alert('Member deleted Successfully!')</script>";
    }
		
    if (isset($_GET['edited'])) {
        echo "<script>alert('Member Edited Successfully!')</script>";
    }

    if (isset($_GET['not_edited'])) {
        echo "<script>alert('Member Editing Failed!')</script>";
    }
?>

<?php include 'header.php'; ?>

<section class="card mx-4 my-4">
    <div class="table-responsive">
        <table class="table table-hover table-borderless table-striped">
            <thead class="card-head">
              <tr class="btn-primary" style="padding: 8px;">
                <th scope="col" style="color: #f2f2f2;">First Name</th>
                <th scope="col" style="color: #f2f2f2;">Last Name</th>
                <th scope="col" style="color: #f2f2f2;">Email</th>
                <th scope="col" style="color: #f2f2f2;">Reg. Time</th>
                <th scope="col" style="color: #f2f2f2;">Edit</th>
                <th scope="col" style="color: #f2f2f2;">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $m_q = query("SELECT * FROM user WHERE rank='0' ORDER BY id DESC");
    confirm($m_q); 

    while ($row = fetch_array($m_q)) {
        $user_id = $row['id'];
       
    
     ?>
               
              <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['reg_time']; ?></td>
                <td>
                    <a href="edit_user.php<?php echo '?id='.$user_id; ?>" class="btn btn-primary" style="overflow: hidden;">Edit</a>
                </td>
                <td>
                    <a href="<?php echo '?delete='.$user_id; ?>" class="btn btn-danger" style="overflow: hidden;">Delete</a>
                </td>
              </tr>
      <?php

 }

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM user WHERE id='$user_id'");
            confirm($qy);
            header('location: index.php?deleted');
        }  

  ?>
            </tbody>
        </table>
    </div>
</section>


<?php include 'footer.php'; ?>