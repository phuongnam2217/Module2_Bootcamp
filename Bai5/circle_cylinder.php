<?php
class Circle
{
    private $radius;
    private $color;
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function __toString()
    {
        return "Hình tròn có bán kính: " . $this->radius . ", Màu : " . $this->color . ", Diện tích : " . $this->calculateArea();
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Cylinder extends Circle
{
    private $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculateArea() * $this->height;
    }
    public function __toString()
    {
        return "Hình trụ có bán kính: " . $this->getRadius() . ", Chiều cao: " . $this->getHeight() . ", Màu: " . $this->getColor() . ", Diện tích: " . $this->calculateArea();
    }
}

$circle1 = new Circle(5, "red");
echo $circle1->__toString() . "<br>";
$cylinder = new Cylinder(10, "Blue", 10);
echo $cylinder->getColor() . "<br>";
echo $cylinder->getRadius() . "<br>";
echo $cylinder->getHeight() . "<br>";
echo $cylinder->calculateArea() . "<br>";;
echo $cylinder->__toString() . "<br>";
