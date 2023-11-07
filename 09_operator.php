<?php

/*
Operators in php
1. Arithmetic Operator
2. Assignment Operator
3. Comparison Operator
4. Logical Operator

*/


//1.Arithmetic Operator

echo "<br>Arithmetic operator <br>";
$a = 5;
$b = 10;

echo "For a+b, the result is ".($a+$b)."<br>";
echo "For a-b, the result is ".($a-$b)."<br>";
echo "For a*b, the result is ".($a*$b)."<br>";
echo "For a/b, the result is ".($a/$b)."<br>";
echo "For a%b, the result is ".($a%$b)."<br>";
echo "For a**b, the result is ".($a**$b)."<br>";

//2.Assignment Operator
echo "<br>Assignment operator <br>";
$x=$a;
echo "For the x, value is ".$x."<br>";
$a+=6;
echo "For the a, value is ".$a."<br>";
$a-=6;
echo "For the a, value is ".$a."<br>";
$a*=6;
echo "For the a, value is ".$a."<br>";
$a/=6;
echo "For the a, value is ".$a."<br>";
 $a%=6;
 echo "For the a, value is ".$a."<br>";

//2.Comarison Operator
echo "<br>Comparison operator <br>";
$x = 17;
$y = 8;
echo "<br>For x==y, the result is ";
var_dump($x == $y)."<br>";

echo "<br>For x>y, the result is ";
 var_dump($x > $y)."<br>";

 echo "<br>For x < y, the result is ";
 var_dump($x < $y)."<br>";

echo "<br> For x <> y, the result is";
 var_dump($x <> $y)."<br>";

echo "<br> For x <= y, the result is";
 var_dump($x <= $y)."<br>";

echo "<br> For x >= y, the result is";
 var_dump($x >= $y)."<br>";


 //4. Logical Operator
 echo "<br>Logical operator <br>";
 $m = true;
 $n = false;

 echo "<br> For m and n, the result is";
 var_dump($m and $n)."<br>";

 echo "<br> For m && n, the result is";
 var_dump($m && $n)."<br>";

 echo "<br> For m or n, the result is";
 var_dump($m or $n)."<br>";

 echo "<br> For m || n, the result is";
 var_dump($m || $n)."<br>";

 echo "<br> For !m, the result is";
 var_dump(!$m)."<br>"; //if $m=true so !m=false its run a oppositly

 
?>