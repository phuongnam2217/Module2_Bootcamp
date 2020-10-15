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

class MoveablePoint extends Point2D
{
    protected $xSpeed;
    protected $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . "), speed=(" . $this->xSpeed . "," . $this->ySpeed . ")";
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "(" . $this->x . "," . $this->y . ")";
    }
}
