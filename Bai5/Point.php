<?php
class Point2D
{
    protected $x;
    protected $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->x = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        $arr = [];
        array_push($arr, $this->x);
        array_push($arr, $this->y);
        return $arr;
    }
    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . ")";
    }
}

class Point3D extends Point2D
{
    private $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }
    public function getXYZ()
    {
        $arr = [];
        array_push($arr, $this->getX());
        array_push($arr, $this->y);
        array_push($arr, $this->z);
        return $arr;
    }
    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . "," . $this->z . ")";
    }
}

$point2d = new Point2D(1, 1);
print_r($point2d->getXY());
echo   "<br>";
echo $point2d->__toString() . "<br>";
$point3d = new Point3D(1, 2, 3);
print_r($point3d->getXYZ());
echo   "<br>";
echo $point3d->__toString() . "<br>";
