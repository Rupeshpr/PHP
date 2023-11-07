<?php


//Connecting to the Databse
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbrupesh";


//create a connection 
$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "<br>connection was successful";
}

//Create a db
$sql = "CREATE DATABASE dbrupesh3";
mysqli_query($conn,$sql);

//Die if connection was not successful


?>