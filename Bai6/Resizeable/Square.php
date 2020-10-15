<?php
include_once 'Rectangle.php';
include_once 'Resizeable.php';
include_once 'Colorable.php';
class Square extends Rectangle implements Resizeable, Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($number)
    {
        $this->width = $this->width * $number;
    }
    public function howToColor()
    {
        return "Color all four sides..";
    }
}
