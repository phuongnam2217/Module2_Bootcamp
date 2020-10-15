<?php
class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";
    function setSpeed($speed)
    {
        if ($speed == 1) {
            $this->speed = self::SLOW;
        }
        if ($speed == 2) {
            $this->speed = self::MEDIUM;
        }
        if ($speed == 3) {
            $this->speed = self::FAST;
        }
    }
    function getSpeed()
    {
        return $this->speed;
    }
    function setOn()
    {
        if (!$this->on) {
            $this->on = true;
        }
    }
    function getOn()
    {
        return $this->on;
    }
    function setRadius($radius)
    {
        $this->radius = $radius;
    }
    function getRadius()
    {
        return $this->radius;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
    function toString()
    {
        if ($this->on == true) {
            return "Speed :" . $this->speed . " Color : " . $this->color . " Radius : " . $this->radius . " fan is on ";
        } else {
            return "Color : " . $this->color . " Radius: " . $this->radius . " fan is off";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fan1 = new Fan();
    $fan1->setOn();
    $fan1->setSpeed(3);
    $fan1->setColor('yellow');
    $fan1->setRadius(10);
    echo $fan1->toString();
    $fan2 = new Fan();
    $fan2->setSpeed(2);
    echo "<br>";
    echo $fan2->toString();
    ?>
</body>

</html>