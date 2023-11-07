<?php
echo (" Prime Numbers from 1 to 100 are: \n");
for($number = 1; $number <=100; $number++)
{
$count = 0;
//Conditon to check find prime numbers
for ( $i = 2; $i <= $number/2; $i++ )
{
if($number%$i == 0 )
{
$count++;
break;
}
}
if( $count == 0 && $number != 1 )
{
echo $number. "   ";
}
}

?>