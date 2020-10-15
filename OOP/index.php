<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('class.php'); ?>
    <?php
    $person1 = new Person('Nam Nguyễn', 25);
    $person1->setPhone(84975278915);
    $person2 = new Person('Ngọc Châu', 18);
    echo "Nam full name là: " . $person1->getName() . ", Tuổi :" . $person1->getAge();
    echo "<br>";
    echo "Phone number :" . $person1->getPhone();
    echo "<br>";
    echo "Châu full name là: " . $person2->getName() . ", Tuổi :" . $person2->getAge();
    ?>
</body>

</html>