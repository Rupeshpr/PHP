<?php
// echo "Welcome to the session<br>";
//What is a session?
//Used to manage information across diffrent pages

//verify the user login info
session_start();
$_SESSION['username'] = "Rupesh";
$_SESSION['favcat']  = "Books";
echo "we have saved your session";
?>