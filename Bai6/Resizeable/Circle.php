<?php

include_once 'Shape.php';
include_once 'Resizeable.php';

class Circle extends Shape implements Resizeable
{
    protected $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter()
    {
        return pi() * 2 * $this->radius;
    }
    public function resize($number)
    {
        $this->radius = $this->radius * $number;
    }
}
