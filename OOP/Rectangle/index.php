<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('classRectangle.php') ?>
    <?php
    $rec1 = new Rectangle(100, 200);
    echo $rec1->getArea() . "<br>";
    echo $rec1->getPerimeter() . "<br>";
    echo $rec1->display() . "<br>";
    $rec2 = new Rectangle(50, 100);
    echo $rec2->getArea() . "<br>";
    echo $rec2->getPerimeter() . "<br>";
    echo $rec2->display() . "<br>";
    ?>
</body>

</html>