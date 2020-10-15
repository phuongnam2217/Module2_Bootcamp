<?php
include('Circle.php');
include('Rectangle.php');
include('Square.php');
$number = rand(1, 100);
echo "-----------Hình tròn---------<br>";
$circle1 = new Circle('Circle1', 5);
echo "Chu vi: " . $circle1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $circle1->calculateArea() . "<br>";
echo "Sau khi tăng lên $number <br> ";
$circle1->resize($number);
echo "Chu vi: " . $circle1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $circle1->calculateArea() . "<br>";
echo "-----------Hình chữ nhật---------<br>";
$rectangle1 = new Rectangle('Rectangle1', 5, 10);
echo "Chu vi: " . $rectangle1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $rectangle1->calculateArea() . "<br>";
echo "Sau khi tăng lên $number <br> ";
$rectangle1->resize($number);
echo "Chu vi: " . $rectangle1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $rectangle1->calculateArea() . "<br>";
echo "-----------Hình vuông---------<br>";
$square1 = new Square('Square1', 10);
echo "Chu vi: " . $square1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $square1->calculateArea() . "<br>";
echo "Sau khi tăng lên $number <br> ";
$square1->resize($number);
echo "Chu vi: " . $square1->calculatePerimeter() . "<br>";
echo "Diện tích: " . $square1->calculateArea() . "<br>";
echo "-----------Colorable---------<br>";
$shapes[0] = $circle1;
$shapes[1] = $rectangle1;
$shapes[2] = $square1;
$shapes[3] = $circle1;
foreach ($shapes as $shape) {
    echo $shape->calculateArea() . "<br>";
    if ($shape instanceof Square) {
        echo $shape->howToColor() . "<br>";
    }
}
