<?php

echo "if-else conditional<br><br>";
//if-else

// $a = 658;
// $b = 9;

// if($a>78){
//     echo "a is greater than 78";
// }
// else
// {
//     echo "a is not greater than 78";
// }

//nested if-elseif ladder
$age = 19;
if($age>18){
    echo "you can drink alcohol";
}
elseif($age>13){
    echo "you can drink water and tea only. No alcohol for you";
}
else{
    echo "you can drink water only";
}

echo "<br>Done<br>";



// if-if-else

// if($age>18){
//     echo "you can drink alcohol"; //Both if are execute.
// }
// if($age>13){
//     echo "<br>you can drink water and tea only. No alcohol for you"; //Both if are execute 
// }
// else{
//     echo "you can drink water only";
// }

// echo "<br>Done";


// quick-quiz
// 1.Create an if else ladder using more than one elseif
// 2.write a program to allow a drive only when his age is greater than or equal to 25 and 
// less than or equal to 67.


// 1.type
echo "<br><br>if-elseif example<br>";
$age = 88;
if($age<=25){
    echo "you can not drive because you are a young";
}
elseif($age<=67){
    echo "you can drive because you are youngg";
}
else{
    echo "you can't drive";
}


// 2.type
// echo "<br><br>if-elseif example<br>";
// $age = 19;
// if($age>=67){
//     echo "you can not drive because you are old man";
// }
// elseif($age>=25){
//     echo "you can drive because you are a young";
// }
// elseif($age<=25){
//     echo "you can not drive because you are kid";
// }
// else{
//     echo "you can't drive";
// }
?>