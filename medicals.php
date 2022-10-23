<?php include 'header.php'; ?>

<section class="body-container">
<!-- hero section -->
<section class="hero">
  <img src="images/banner1.jpg">
<h1>MEDICALS</h1>
<h3 style="border: none;">read inspiring stories</h3>
  
</section>

<section class="container">
<center>

  <table>

    <?php

    $rank = '1';
    $category = 'Medicals';

    $h_q = query("SELECT * FROM story WHERE rank='$rank' and category='$category' ORDER BY id DESC");
    confirm($h_q); 

    if (mysqli_num_rows($h_q) > 0) {
    while ($h_row = fetch_array($h_q)) {
      
        
     ?>
    <tr>
  <div class="col-lg-8" style="margin-bottom: 5%;">

     <div class="card">

        <div class="card-head">
          <img src="dashboard/image/<?php echo $h_row['image']; ?>" class='my-3' style='width:100%;height:60vh; overflow: hidden;'>
          
        </div>

        <div class="card-body">
          <h4 style="margin-bottom: 3%; color: #c70606;"><?php echo $h_row['title']; ?></h4>
          <p style="color: #222">
            <?php echo $h_row['story_text']; ?>
          </p>
        </div>
      </div>
      
    </div>
    </tr>

  <?php 

    }

    }  else {
      echo "<h2 style='color:red'>We are sorry, there is currently no available story in this category</h2>";
    }


 ?>
    </table>
    </center>
  
</section>







</section>
<?php include 'footer.php'; ?>