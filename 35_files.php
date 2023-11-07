<?php
// r w a
//fopen() = it describe a file resorce
//fread() = we write a number it shows a number of characters
//filesize() =  it describe  a total  file size it means display a fully statement
$fptr = fopen("file","r");
// echo var_dump($fptr);
if(!$fptr){
    die("unable to open this file. Please enter a valid filename");
}
$content = fread($fptr, filesize("file"));
fclose($fptr);
echo $content;


?>