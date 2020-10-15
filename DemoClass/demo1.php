<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class tinhtoan
    {
        private $a = 4;
        protected $b = 5;
        public $c = 8;
        public $d = 10;
        public function seta($a)
        {
            $this->a = $a;
        }
        public function geta()
        {
            return $this->a;
        }
        public function setb($b)
        {
            $this->b = $b;
        }
        public function getb()
        {
            return $this->b;
        }
        public function sum($x, $y)
        {
            return $x + $y;
        }
    }
    $tinh = new tinhtoan;
    // $tinh->seta(5);
    // $tinh->setb(6);
    echo $tinh->c . "+" . $tinh->d . "=" . $tinh->sum($tinh->c, $tinh->d);
    ?>
</body>

</html>