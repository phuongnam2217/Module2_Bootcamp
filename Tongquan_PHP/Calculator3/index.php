<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand1 = $_POST["operand1"];
    $operand2 = $_POST["operand2"];
    $operator = $_POST["operator"];
    function calculator($operand1, $operand2, $operator)
    {
        if ($operand2 == "0") {
            throw new Exception("Không hợp lệ");
        } else {
            if ($operator == "cong") {
                return $operand1 . " + " . $operand2 . " = " . ($operand1 + $operand2);
            } else if ($operator == "tru") {
                return $operand1 . " - " . $operand2 . " = " . ($operand1 - $operand2);
            } else if ($operator == "nhan") {
                return $operand1 . " * " . $operand2 . " = " . ($operand1 * $operand2);
            } else {
                return $operand1 . " / " . $operand2 . " = " . ($operand1 / $operand2);
            }
        }
    }
    try {
        echo "<h2>Result:</h2>";
        echo calculator($operand1, $operand2, $operator);
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
    <div class="calculator">
        <form action="" method="post">
            <h2>Simple Calculator</h2>
            <fieldset>
                <legend>Calculator</legend>
                <label for="">First operand : </label><input type="text" name="operand1"><br><br>
                <label for="">Operator :</label>
                <select name="operator" id="">
                    <option value="cong">Cộng</option>
                    <option value="tru">Trừ</option>
                    <option value="nhan">Nhân</option>
                    <option value="chia">Chia</option>
                </select><br><br>
                <label for="">Second operand</label><input type="text" name="operand2"><br><br>
                <input type="submit" value="Calculator">
            </fieldset>
        </form>
    </div>
</body>

</html>