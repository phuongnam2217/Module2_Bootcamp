<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class base
    {
        const PI = 3.14;
        public $bankinh = 10;
        public static function chuvi()
        {
            return 2 * self::$bankinh * self::PI;
        }
    }
    echo "bán kính là:" . base::chuvi();
    ?>
</body>

</html>