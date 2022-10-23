<?php
    include 'include/dbconnect.php';
    include 'include/function.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Visit Scotland | Official Tourism Stories</title>
<meta name="description" content="Our tourism storytelling site gives you the most remarkable information from storytellers">

<!-- CSS FILES -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
<link href="css/style.css" rel="stylesheet">

<!-- fav-icon  -->
    <link rel="icon" href="images/favicon.png">

<!-- font awesome -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- google font -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat=bold:wght@600" rel="stylesheet">


</head>
<body>

    

<!-- header -->
  <div class="container-fluid">

  <button class="btn mobile m-icon" id="m-close" onclick="menu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </button>

    <div class="row pt-4 m-cont">
      <div class="col-sm-2">
      <img src="images/logo.png" class="logo">
      
    </div>


    <div class="col-sm-8" id="overlay">
      <ul class="c-menu desktop bold" id="show">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="places.php">Cities and Places</a></li>
        <li><a href="artandculture.php">Art and Culture</a></li>
      </ul>
      
    </div>

    <div class="col-sm-2">
      <form method="post" action="" class="search-input">
        <input type="text" placeholder="Search" name="keyword" required value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>">
        <button type="submit" name="search"><img src="images/search.png"></button>
      </form>
    </div>
<!-- ========================= -->
    <?php
        if(isset($_POST['search'])){
          $keyword = $_POST['keyword'];
      ?>

        <div style="margin-left: 2%; background-color: cornsilk; padding: 8px;">
        <h2 style="color: dodgerblue">Result</h2>
        <hr style="border-top:2px dotted #ccc;"/>
        <?php
          $query = query("SELECT * FROM story WHERE title LIKE '%$keyword%' ORDER BY `title`");
          confirm($query);

          if (mysqli_num_rows($query) > 0) {
          
          while($fetch = fetch_array($query)){
        ?>
        <div style="word-wrap:break-word;">
          <a href="get_blog.php?id=<?php echo $fetch['id']?>"><h4 style="color: blue; text-decoration:underline;"><?php echo $fetch['title']?></h4></a>
          <p style="color: #222; font-size: 16px;"><?php echo substr($fetch['story_text'], 0, 100)?>...</p>
        </div>
        <hr style="border-bottom:1px solid #ccc;"/>
        <?php
          }
        } else {
          echo "<p style='color: blue'>no matching result</p>";
        }
        ?>
      </div>
      <?php
        }
      ?>
<!-- ===================================== -->

 </div>

    <!-- login button -->

    <div class="login">

      <button type="button" class="btn btn-primary p-2"><a href="login.php" >SIGN IN </a></button>
      
    </div>
  
      
    </div>