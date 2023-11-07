<?php

// start the session and get the data

session_start();
if(isset($_SESSION['username'])){

    echo "welcome".$_SESSION['username'] = "Rupesh";
    echo "<br>Your favorite category is ".$_SESSION['favcat']  = "Books";
    echo "<br>";
}
else{
    echo "Please login to continue";
}
?>