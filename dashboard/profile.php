<?php 
ob_start();

    if (isset($_GET['successful'])) {
        echo "<script>alert('Succesfully Edited')</script>";
    }
?>

<?php include 'header.php'; ?>


<center>
    <h2 style="color: #222">PROFILE</h2>
<section class="col-lg-12" style="margin-bottom: 5%;">
              
          <div class="card" style="margin: auto; color: white">

            <div class="card-body">
              

                        <form method="POST" action="">  
                                    <div class="mt-4">
                                        <div class="col-md-6">
                                            <label>First name</label>
                                            <input style="border-style: hidden;" type="text" value="<?php echo $q_row['firstname']; ?>" name="firstname" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Last name</label>
                                            <input style="border-style: hidden;" type="text" value="<?php echo $q_row['lastname']; ?>" name="lastname" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input style="border-style: hidden;" type="email" value="<?php echo $q_row['email']; ?>" name="email" class="form-control" required>
                                        </div> <br><br>

                                        <div class="col-md-6">
                                        
                                            <a href="change-password.php">Click to Change Password</a>
                                        </div>

                                        <div class="col-md-12">
                                            <br><br><button style="background-color: #233c96; padding: 10px; padding-left: 20px; padding-right: 20px; color: #f2f2f2; font-weight: 900; font-size: 16px; border-style: hidden; border-radius: 4px;" name="p_edit">UPDATE</button>
                                            
                                        </div>
                            </form>

        
    </div>

    <?php
                if (isset($_POST['p_edit'])) {
                    $firstname = escape_string($_POST['firstname']);
                    $lastname = escape_string($_POST['lastname']);
                    $email = escape_string($_POST['email']);

                $qe = query("UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$session_id'");
                confirm($qe);
                    header("location: profile.php?successful");

                
                    
                }

              ?>

           
            
          </div>

        </section> 

        </center>


        <?php include 'footer.php'; ?>