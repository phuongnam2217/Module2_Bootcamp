<?php
function cal($x, $y)
{
    if ($y == 0 || ($x == 0 && $y == 0)) {
        throw new Exception("Divide by zero");
    } else {
        echo "Tổng" . $x . "+" . $y . "=" . ($x + $y) . "<br>";
        echo "Hiệu" . $x . "-" . $y . "=" . ($x - $y) . "<br>";
        echo "Tích" . $x . "*" . $y . "=" . ($x * $y) . "<br>";
        echo "Thương" . $x . "/" . $y . "=" . ($x * $y) . "<br>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    try {
        cal($operand1, $operand2);
    } catch (Exception $e) {
        echo $e->getMessage();
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
    <form action="" method="post">
        <input type="text" name="operand1" placeholder="Nhập số hạng 1">
        <input type="text" name="operand2" placeholder="Nhập số hạng 2">
        <input type="submit" value="Result">
    </form>
</body>

</html>