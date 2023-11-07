<?php

echo "welcome to the stage where we are ready to get connected to a database";

/*
ways to connect to a MySQL Database

1. MYSQLI execension
2. PDO - php data objects
*/



//Connecting to the Databse
$servername = "localhost";
$username = "root";
$password = "";


//create a connection 
$conn = mysqli_connect($servername,$username,$password);


//Die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "<br>connection was successful";
}


?>