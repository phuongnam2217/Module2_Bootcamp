<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    function setOperand($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getA()
    {
        return $this->a;
    }
    function getB()
    {
        return $this->b;
    }
    function getC()
    {
        return $this->c;
    }
    function getDiscriminant()
    {
        return pow($this->b, 2) - (4 * $this->a * $this->c);
    }
    function  getRoot()
    {
        if ($this->getDiscriminant() > 0) {
            return "PT có 2 nghiệm : " . (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a) . " và " . (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        } else if ($this->getDiscriminant() == 0) {
            return "PT có 2 nghiệm bằng nhau :" . (-$this->b / (2 * $this->a));
        } else {
            return "PT vô nghiệm";
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
    $pt = new QuadraticEquation();
    $pt->setOperand(1, 3, 2);
    echo "a :" . $pt->getA() . "<br>";
    echo "b :" . $pt->getB() . "<br>";
    echo "c :" . $pt->getC() . "<br>";
    echo "Delta : " . $pt->getDiscriminant() . "<br>";
    echo $pt->getRoot() . "<br>";
    ?>
</body>

</html>