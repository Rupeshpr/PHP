<?php

echo "While loop in php<br>";

// 1.print 1 to 5 using while loop.
$i=0;
while($i<5){
    echo $i+1;
    echo "<br>";
    $i++;   
}

// 2.print 1 to 5000 using while loop.
$q=1;
while($q<5002){
    echo "the value of q is";
    echo $q;
    echo "<br>";
    $q+=2;
}

//3.using && operator.
$r=1;
$x=9;
while($r<30 && $x<20){
    echo "the value of r is";
    echo $r;
    echo "<br>";
    echo "the value of x is";
    echo $x;
    echo "<br>";
    $r+=2;
    $x+=4;
}



$m=0;
while($m<101){
    echo "the value of m is";
    echo $m;
    echo "<br>";
    $m++;
}
echo "<br>";

$rp=0;
while($rp<=10){
    echo "<br>$rp";
    $rp++; 
}
?>