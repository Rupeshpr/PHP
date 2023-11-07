<?php

echo "For each loop<br>";
$arr=array("banana","apples","mango","watermelon","kiwi");

//its using a for loop
// for($i=0; $i < count($arr); $i++)
// {
//     echo $arr[$i];
//     echo "<br>";
// }


// Better way to this - Foreach loops
foreach ($arr as $value) {
    echo "$value<br>";
}


echo "<br><br>";

$rp = ["rupesh","karan","krish","harsh","mahesh","dhruv"];

foreach($rp as $value){
    echo "$value <br>";
}
?>