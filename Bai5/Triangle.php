<?php
class Shape
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function _show()
    {
        return "I am a shape. My name is $this->name ";
    }
}
class Triangle extends Shape
{
    protected $size1;
    protected $size2;
    protected $size3;
    public function __construct($name)
    {
        parent::__construct($name);
        $this->size1 = 1.0;
        $this->size2 = 1.0;
        $this->size3 = 1.0;
    }
    public function setSize1($size1)
    {
        $this->size1 = $size1;
    }
    public function setSize2($size2)
    {
        $this->size1 = $size2;
    }
    public function setSize3($size3)
    {
        $this->size1 = $size3;
    }
    public function getSize1()
    {
        return $this->size1;
    }
    public function getSize2()
    {
        return $this->size2;
    }
    public function getSize3()
    {
        return $this->size3;
    }
    public function getPerimeter()
    {
        return $this->size1 + $this->size2 + $this->size3;
    }
    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        return pow($p * ($p - $this->size1) * ($p - $this->size2) * ($p - $this->size3), 0.5);
    }
    public function __toString()
    {
        return "Name :" . $this->name . "Độ dài 3 cạnh: " . $this->size1 . "," . $this->size2 . "," . $this->size3 . ", Chu vi: " . $this->getPerimeter() . ", Diện tích: " . $this->getArea();
    }
}
