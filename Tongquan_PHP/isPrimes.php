<?php
$number = 20;
$count = 0;
$n = 2;
function isPrime($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
while ($count < $number) {
    if (isPrime($n)) {
        echo $n . " Là số nguyên tố<br/> ";
        $count++;
    }
    $n++;
}
