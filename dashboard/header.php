<?php
    require_once '../include/dbconnect.php';
      require_once '../include/session.php';
    require_once '../include/function.php';

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

 <?php 


    $q = query("SELECT * FROM user WHERE id='$session_id'");
    confirm($q);
    $q_row = fetch_array($q);

?>

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
        <li><a href="index.php">Publish New Story</a></li>
        <li><a href="manage_story.php">Manage Stories</a></li>
        <li><a href="profile.php">Manage Profile</a></li>
      </ul>
      
    </div>

    <div class="col-sm-2">
      <button type="button" class="btn btn-primary mt-4 logout-btn"><a href="logout.php" >SIGN OUT </a></button>
      
    </div>

    <div>
      <h5 style="color: #f2f2f2; text-shadow: 2px 2px 2px #222;">Welcome <?php echo $q_row['firstname']." ".$q_row['lastname']; ?></h5>
    </div>

    </div>  
      
    </div>