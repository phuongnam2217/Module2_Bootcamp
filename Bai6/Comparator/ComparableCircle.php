<?php
include 'Circle.php';
include 'Comparable.php';

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $color)
    {
        parent::__construct($radius, $color);
    }
    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        } elseif ($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
