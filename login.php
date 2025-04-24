<?php 
 session_start(); // Start the session
 if(isset($_POST['submitLogin'])) {
     // Check if the user is already logged in
     $_SESSION['id'] = 1;
     header("Location:files.php");
 }// Set session variable to indicate user is logged in