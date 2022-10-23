<?php 
ob_start();

    if (isset($_GET['successful'])) {
        echo "<script>alert('Succesfully Changed Password')</script>";
    }

    if (isset($_GET['error'])) {
        echo "<script>alert('Old Password not Correct, Please Check')</script>";
    }
?>

<?php include 'header.php'; ?>
<center>
<section class="col-lg-12" style="margin-bottom: 5%;">
              
          <div class="card" style="margin: auto; color: white">

            <div class="card-body">
              

                        <form method="POST" action="">  
                         <div class="mt-4">                
                        <div class="col-md-6">
                          <div class="mb-30 mb-xs-20">
                            <input class="form-control" name="oldpassword" type="password" required placeholder="Enter your Old Password">
                          </div>
                        </div> <br>

                        <div class="col-md-6">
                          <div class="mb-30 mb-xs-20">
                            <input class="form-control" minlength="8" name="newpassword" type="password" required placeholder="Enter your New Password">
                          </div>
                        </div>
                                        

                            <div class="col-md-12">
                                <br><br><button style="background-color: #233c96; padding: 10px; padding-left: 20px; padding-right: 20px; color: #f2f2f2; font-weight: 900; font-size: 16px; border-style: hidden; border-radius: 4px;" name="pass_edit">UPDATE PASSWORD</button>
                                
                            </div>
                            </form>

        
    </div>

    <?php
                if (isset($_POST['pass_edit'])) {
                    
                    $oldpassword = $_POST['oldpassword'];
                    $oldpassword = md5($oldpassword);
                    $newpassword = $_POST['newpassword'];
                    $newpassword = md5($newpassword);

                    $q = query("SELECT password FROM user WHERE id='$session_id'");
            confirm($q);
            $q_row = fetch_array($q);

                    $password = $q_row['password'];
            if ($oldpassword == $password) {
                    
                $qe = query("UPDATE user SET password='$newpassword' WHERE id='$session_id'");
                confirm($qe);
                    header("location: change-password.php?successful");

                } else {
                    header("location: change-password.php?error");
                }


                }

              ?>

           
            
          </div>

        </section> 
        </center>

        <?php include 'footer.php'; ?>