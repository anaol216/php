<?php 
 session_start(); // Start the session
 session_unset();
 session_destroy(); // Destroy the session
    header("Location: files.php"); // Redirect to the files page after logout