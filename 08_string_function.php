<?php

$name = "hello Rupesh how are u ";
echo $name;
echo "<br>";

echo "the length of "."my string is ". strlen($name); //count a string value
echo "<br>";
echo str_word_count($name); //count a words
echo "<br>";
echo strrev($name); //reverse a string
echo "<br>";
echo strpos($name,"how"); //it is used of a count value from 0 / return a postition of character  from 0 index
echo "<br>";
echo str_replace("Rupesh","Rp",$name);
echo "<br>";
echo str_repeat($name,5); //its define a how many time u are repeat a value
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy   "); //Remove the right side space
echo "<br>";
echo ltrim("   this is a good boy   "); //Remove the left side space
echo "</pre>";
?>