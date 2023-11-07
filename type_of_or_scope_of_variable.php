<?php


//Local Varibale
function addition()
{
    $no1 = 10;
    $no2 = 20;

    $addition = $no1+$no2;

    echo "Addition is ".$addition;
}
addition();



//Global variable





//Static varibale
function static_variable()
{
    static $n1 = 5;
           $n2 = 5;
    $n1++;
    $n2++;

    echo "static variable ".$n1;
    echo "Non static variable ".$n2;

}
echo "<br>";
static_variable();
echo "<br>";
static_variable();
echo "<br>";
static_variable();
?>