<?php
class Circle
{
    private $radius;
    private $color;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getName()
    {
        return $this->name;
    }
    public function __toString()
    {
        return "Hình tròn có bán kính: " . $this->radius . ", Tên : " . $this->name . ", Diện tích : " . $this->calculateArea();
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
