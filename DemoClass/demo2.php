<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>giải phương trình bậc 2</h2>
        a: <input type="number" name="a">
        b: <input type="number" name="b">
        c: <input type="number" name="c">
        <button type="submit">Tính</button>
    </form>
    <?php
    class phuongtrinhbac2
    {
        protected $a;
        protected $b;
        protected $c;
        private function delta()
        {
            return pow($this->b, 2) - 4 * $this->a * $this->c;
        }
        public function giai()
        {
            if ($this->delta() < 0) {
                echo "phương trình vô nghiệm";
            } else if ($this->delta() == 0) {
                echo "Nghiệm kép: x<sub>1</sub> =x <sub>2</sub>=" . -$this->b / 2 * $this->a;
            } else {
                $x1 = - ($this->b - sqrt($this->delta())) / 2 * $this->a;
                $x2 = - ($this->b + sqrt($this->delta())) / 2 * $this->a;
                echo "x<sub>1</sub>=" . $x1 . " " . "x<sub>2</sub>=" . $x2;
            }
        }
    }
    class phuongtinh extends phuongtrinhbac2
    {
        public function gpt()
        {
            return $this->giai();
        }
        public function seta($a)
        {
            $this->a = $a;
        }
        public function setb($b)
        {
            $this->b = $b;
        }
        public function setc($c)
        {
            $this->c = $c;
        }
    }
    $abc = new phuongtinh;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $abc->seta($_POST["a"]);
        $abc->setb($_POST["b"]);
        $abc->setc($_POST["c"]);
        $abc->gpt();
    }

    ?>
</body>

</html>