<?php
include 'ComparableCircle.php';

$circle1 = new ComparableCircle('circle1', 10);
echo $circle1->getRadius() . "<br>";
echo $circle1->__toString() . "<br>";
$circle2 = new ComparableCircle('circle2', 2);
echo $circle2->getRadius() . "<br>";
echo $circle2->__toString() . "<br>";

var_dump($circle1->compareTo($circle2));
