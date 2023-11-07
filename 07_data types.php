<?php

$name = "Rupesh";
$income = 200;

/*
    PHP data types
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Object
    6. Array
    7. Null
*/

//String - sequence of characters
$name = "Rupesh";
$friend = 'manish';
echo "$name ka friend is $friend";


// Integer - non decimal number
$income = 450;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Float - Decimal point number
$income = 455.56;
$debts = -325.6;
echo $income;
echo "<br>";
echo $debts;


//Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x);
echo  "<br>";
echo var_dump($is_friend);

//Object -  Instances of classes
// Employee is a class  ----> harry can  be one object

// Array - Used to store multiple value in a single variable
echo "<br>";
$friends = array("rohan","shubham","manish","mahesh");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];


//Null
$name = NULL;
echo "<br>";
echo var_dump($name);
?>