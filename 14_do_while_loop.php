<?php

echo "Do while loop";

// do while loop is atlist 1 time execution
// if condition false even so 1 time will be executed.

// syntax....
// do{
//     some lines of code to be exercuted here.
//     .....
// }while(condition);



$i=0;
do {
    echo "<br>$i";
    $i++;
} while ($i<=10);

echo "<br><br>";
$r=5;
do{
    echo "<br>$r";
    $r++;
}while($r<=50);

echo "<br><br>";

$r=10;
do{
    echo "<br>";
    echo $r;
    $r++;
}while($r<=18);
?>