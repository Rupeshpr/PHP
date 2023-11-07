<?php
$fptr = fopen("file","r");


/*1st way
// echo  fgets($fptr);
// echo  fgets($fptr);
// echo  fgets($fptr);

second  way
//Reading a file line by line
while($a=fgets($fptr)){
    echo $a;
}

echo "End of the file has been reached";
*/

// echo  fgets($fptr);
/*
while($a=fgetc($fptr)){
    echo $a;
    // break;
}

echo "End of the file has been reached"
*/





//write a program which reads the content of a file until. has been encountered

//fgetc()= its for character reading
//fgets()= its for line by line readng
//fclose($fptr)= its for close the file
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);



?>