
<?php
    require_once '../include/dbconnect.php';
      require_once '../include/session.php';
    require_once '../include/function.php';

 ?>


 <?php 
//retrieve user data

    $q = query("SELECT * FROM user WHERE id='$session_id'");
    confirm($q);
    $q_row = fetch_array($q);

    ?>

<?php

error_reporting(0);
    
    if (isset($_POST['upload'])) {
    	$user_id = $session_id;
    	$firstname = $q_row['firstname'];
    	$lastname = $q_row['lastname'];
    	$title = escape_string($_POST['title']); 
    	$category = escape_string($_POST['category']);
        $story_text = escape_string($_POST['story_text']);
        $filename = escape_string($_FILES["uploadfile"]["name"]);
        $tempname = escape_string($_FILES["uploadfile"]["tmp_name"]);
        $folder = "image/".$filename;

        

        //insert into table; story

        $sql = "INSERT INTO story (user_id,firstname,lastname,title,category,image,story_text) VALUES ('$user_id','$firstname','$lastname','$title','$category','$filename','$story_text')";

        mysqli_query($connection, $sql);

        if (move_uploaded_file($tempname, $folder)) {
               
            header("location: index.php?published");
        } else {
            header("location: index.php?not_published");
        }
    }

 ?>