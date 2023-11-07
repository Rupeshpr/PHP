<?php

echo "welcome to the asssociative array in php";

//this are called index arrays
// $arr = array("this","that","those","what","whome");
// echo "<br>";
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];
// echo "<br>";
// echo $arr[3];
// echo "<br>";
// echo $arr[4];
//Associative Array
$favCol = array(
    "rupesh" => "blue",
    "ramesh" => "black",
    "prakash" => "white",
    8 => "this"
);
echo "<br>";
echo $favCol ["prakash"];
echo "<br>";
echo $favCol ["rupesh"];
echo "<br>";
echo $favCol ["ramesh"];
echo "<br>";
echo $favCol [8];
echo "<br>";

echo "<br>";
foreach ($favCol as $key => $value) {
   echo "Favourite color of $key is $value<br>";
}
?>