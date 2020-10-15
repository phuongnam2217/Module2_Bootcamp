<?php
function generateArray($size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $array[$i][$j] = rand(10, 90);
        }
    }
    return $array;
}
function sumMainMatrix($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i][$i];
    }
    return $sum;
}
$size = 10;
$array = generateArray($size);
var_dump($array);
echo "<br>";
$sumMatrix = sumMainMatrix($array);
echo $sumMatrix;
