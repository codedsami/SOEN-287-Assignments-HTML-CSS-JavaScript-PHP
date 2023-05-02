
<!DOCTYPE html>
<!-- 
Miskat Mahmud 
ID: 40250110
SOEN 287- Winter 2023
Assignment 03
Concordia University
Date:  15 April 2023 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testing out findSummation(N):</h1>
    <p> Testing input as 8:</p>

   


    <?php
    function findSummation($number){
        if(!is_int($number)){
            return false;
        }
        else if($number < 0){
            return false;
        }    
        else{
            $sum = 0;
            for ($i = 0; $i <= $number; $i++){
                $sum += $i;
            }
            return $sum;
        }
    }
    echo "Total sum is: " . findSummation(8);
    ?>


    <h1>Testing out uppercaseFirstAndLast</h1>
    <p>Testing out the string concordia</p>
    <?php
    function uppercaseFirstAndLast($inputString){
        if (is_numeric($inputString)){
            return $inputString;
        }
        $modifiedString = strtoupper($inputString[0]) . substr($inputString, 1, strlen($inputString) - 2) 
                          . strtoupper($inputString[strlen($inputString) - 1]);
        return $modifiedString;
    }
    echo uppercaseFirstAndLast("concordia");
    ?>


<h1>Testing out findAverage_and_Median</h1>
<p> array of number: 1, 5, 10, 8, 9, 8 </p>
<?php

function findAverage_and_Median($array){

    foreach ($array as $index){
        if(!is_numeric($index)){
            return false;
        }
    }

    $sum = 0;
    for($i = 0; $i < count($array); $i++){
        $sum += $array[$i];
    }

    $average  = $sum / count($array);

    sort($array);

    $median  = null;
    if(count($array)%2 == 0){
        $index1 = floor(count($array) /2);
        $index2 = ceil(count($array) /2);
        $sum  = $array[$index1] + $array[$index2];
        $median = $sum/2;
    }
    else{
        $index = floor(count($array) /2);
        $median = $array[$index];
    }

    return array($average, $median);

}
$array = array(1, 5, 10, 8, 9, 8);
 $newArr = findAverage_and_Median($array);
echo "The average  is " . $newArr[0] . " and the median is " . $newArr[1];
?>



<h1>Testing out find4Digits</h1>
<p> string of numbers: 1 6 3 5 9 10</p>
<?php
function find4Digits($stringOfNumbers){
    $numberArr = explode(" ", $stringOfNumbers);
    
    $counter = 0;

    $array = array();
    while($counter < 4){
        if(is_numeric($numberArr[$counter])){
            array_push($array, $numberArr[$counter]);
            $counter++;
        }
    }

    return $array;

}
$string = "1 6 3 5 9 10";
$newArr =  find4Digits($string);
echo "The first 4 digits are: ";
for($i = 0; $i < 4; $i++){
    echo $newArr[$i] . " ";
}
?>





</body>
</html>