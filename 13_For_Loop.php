<?php

echo "This is For loop";
echo "<br><br>";
for ($i=1; $i < 6 ; $i++) { 
    // for(initialization; condition; updation)
    echo "<br>";
    echo "The number is $i"; 
}

echo "<br><br>";

for ($i=0; $i <87; $i++) { 
    echo "<br>";
    echo "The number is $i";
}

echo "<br><br>";


for($r=0; $r<=15; $r++)
echo "the value i $r<br>";
echo "<br>";
echo "<br>For loop has ended<br>";


echo "<br>Factorial number<br>";
$a=5;
$fac=1;

for ($i=$a; $i>=1 ; $i--) { 
     $fac=$fac*$a;
}
echo "Factorial of $a is $fac.";
?>