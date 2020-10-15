<?php
class Rectangle
{
    var $width;
    var $height;
    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    function getArea()
    {
        return "Area: " . ($this->width * $this->height);
    }
    function getPerimeter()
    {
        return "Perimeter: " . (($this->width + $this->height) * 2);
    }
    function display()
    {
        return "Rectangle{" . "width: " . $this->width . " height: " . $this->height . "}";
    }
}
