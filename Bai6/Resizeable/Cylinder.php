<?php
include_once 'Circle.php';
include_once 'Resizeable.php';
class Cylinder extends Circle
{
    protected $height;
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculateArea() * $this->height;
    }
    public function calculatePerimeter()
    {
        return parent::calculateArea() * $this->height;
    }
}
