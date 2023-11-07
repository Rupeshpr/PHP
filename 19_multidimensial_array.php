<?php

echo "welcome to multi dimesial array in php";

//creating a 2 dimensial aray
$multidim = array(
                    array(2,5,7,8),    
                    array(1,2,3,1),    
                    array(4,5,0,1)
                );
echo "<br>";
// echo var_dump($multidim);
// echo $multidim[1][2]; // first row [] and second column
echo "<br>";


//printing the contents of a 2 dimensial array
// for ($i=0; $i < count($multidim); $i++) { 
//     echo var_dump($multidim[$i]);
//     echo "<br>";
// }



for ($i=0; $i < count($multidim); $i++) { 
    for ($j=0; $j < count($multidim[$i]); $j++) { 
       echo $multidim[$i][$j];
       echo " ";
    }
    echo "<br>";
}


//Example.2
echo "<br>";

$multidimensialarr = array(
                            array(1,2,3,4),
                            array(5,6,7,8),
                            array(6,2,3,9)
                        );

    




for($r= 0; $r< count($multidimensialarr); $r++){
    for ($p=0; $p < count($multidimensialarr[$r]); $p++) { 
        echo $multidimensialarr[$r][$p];
        echo " ";
    }
    echo "<br>";
}
?>


