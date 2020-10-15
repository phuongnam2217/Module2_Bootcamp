<?php
$a = array(1, 2, 3, 4, 5, 6);
$b = array(7, 8, 9, 10, 11, 12);
function combineArray($a, $b)
{
    $c = array();
    for ($i = 0; $i < count($a); $i++) {
        array_push($c, $a[$i]);
    }
    for ($i = 0; $i < count($b); $i++) {
        array_push($c, $b[$i]);
    }
    return $c;
}
$c = combineArray($a, $b);
print_r($c);
