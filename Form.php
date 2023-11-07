<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city  = $_POST['city'];


    //connecting to database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'phpform';

    //creating a connection
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO student(name,email,mobile,city) values ('$name','$email','$mobile','$city')";
                            //this name is database name         //this name is form name
                                
    mysqli_query($conn,$sql);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#" method="POST">
        Name:- <input type="text" name="name"><br>
        Email:- <input type="email" name="email"><br>
        Mobile:- <input type="number" name="mobile"><br>
        City:- <input type="text" name="city"><br>
        <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>