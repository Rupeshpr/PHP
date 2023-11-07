<?php

echo "welcome to the php tutorial on function<br><br>";

echo "Using Function Sum of total marks of 2 student:-<br>";

function processMarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rupesh = [34,18,67,98,66,90];
$sumMarks = processMarks($rupesh);

$prakash = [89,75,99,74,58,21];
$sumMarksrp = processMarks($prakash);

echo "Total marks scored by rupesh out of 600 is $sumMarks <br>";
echo "Total marks scored by rupesh out of 600 is $sumMarksrp";



echo "<br><br>";
echo "Using Function Sum of total marks of 1 student<br>";
function totalMarks($rp){
        $sum=0;
        foreach ($rp as $value) {
                $sum += $value;
            }
            return $sum;
        
        }
            $mahesh = [87,97,89,65,43,54];
            $total= totalMarks($mahesh);
        
            echo "Total marks scored by rupesh out of 600 is $total";
        
        
        echo "<br><br>";


        echo "Using Function Average of total marks of 1 student<br>";
        function avgMarks($avg){
            $sum=0;
            $i=0;
        foreach ($avg as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
        
    }
    $mahesh = [78,65,89,56,89,90];
        $percentage = avgMarks($mahesh);
    
        echo "Avg marks scored by mahesh out of 600 is $percentage";

        echo "<br><br>";

        echo "Using Function Average of total marks of 1 student<br>";

        function averageMarks($Marks){
            $sum=0;
            $i=0;
    foreach($Marks as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}
    $harsh = [78,58,65,95,52,12];
    $avgMarks = averageMarks($harsh);

    echo "Average scored by harsh out of 600 is $avgMarks";


