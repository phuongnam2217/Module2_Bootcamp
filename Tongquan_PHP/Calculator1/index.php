<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["money"];
    $rate = $_POST["interesrate"];
    $year = $_POST["year"];
    for ($i = 0; $i < $year; $i++) {
        $money += ($money * $rate / 100);
    }
    echo "Giá trị Tương lại sau " . $year . " năm là: " . $money;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Future Value Calculator</title>
    <style>
        .calculator {
            border: 1px solid black;
            width: 200px;
            text-align: center;
            margin-top: 20px;
        }

        .calculator input {
            margin-top: 10px
        }
    </style>
</head>

<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="text" name="money" placeholder="Inventment Amount"><br>
            <input type="text" name="interesrate" placeholder="Yearly Interest Rate"><br>
            <input type="text" name="year" placeholder="Number of Years"><br>
            <input type="submit" value="Result">
        </form>
    </div>
</body>

</html>