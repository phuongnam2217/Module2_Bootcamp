<?php
$arr_number = [];
$unit;
$dozen;
$hundred;
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    while ($number > 0) {
        $num = $number % 10;
        array_push($arr_number, $num);
        $number = floor($number / 10);
    }
    if (count($arr_number) == 3) {
        $hundred = $arr_number[2];
        $dozen = $arr_number[1];
        $unit = $arr_number[0];
    } else if (count($arr_number) == 2) {
        $dozen = $arr_number[1];
        $unit = $arr_number[0];
        $hundred = NULL;
    } elseif (count($arr_number) == 1) {
        $unit = $arr_number[0];
        $hundred = NULL;
        $dozen = NULL;
    } else {
        $unit = NULL;
        $hundred = NULL;
        $dozen = NULL;
        echo "Out of ability";
    }
    switch ($hundred) {
        case "1":
            $result .= "one hundred ";
            break;
        case "2":
            $result .= "two hundred ";
            break;
        case "3":
            $result .= "three hundred ";
            break;
        case "4":
            $result .= "four hundred ";
            break;
        case "5":
            $result .= "five hundred ";
            break;
        case "6":
            $result .= "six hundred ";
            break;
        case "7":
            $result .= "seven hundred ";
            break;
        case "8":
            $result .= "eight hundred ";
            break;
        case "9":
            $result .= "nine hundred ";
            break;
    }
    if ($dozen >= 2) {
        switch ($dozen) {
            case "2":
                $result .= "twenty ";
                break;
            case "3":
                $result .= "thirty ";
                break;
            case "4":
                $result .= "fourty ";
                break;
            case "5":
                $result .= "fifty ";
                break;
            case "6":
                $result .= "sixty ";
                break;
            case "7":
                $result .= "seventy ";
                break;
            case "8":
                $result .= "eighty ";
                break;
            case "9":
                $result .= "ninety ";
                break;
        }
        switch ($unit) {
            case "1":
                $result .= "one";
                break;
            case "2":
                $result .= "two";
                break;
            case "3":
                $result .= "three";
                break;
            case "4":
                $result .= "four";
                break;
            case "5":
                $result .= "fine";
                break;
            case "6":
                $result .= "six";
                break;
            case "7":
                $result .= "seven";
                break;
            case "8":
                $result .= "eight";
                break;
            case "9":
                $result .= "nine";
                break;
        }
    } elseif ($dozen == 1) {
        switch ($unit) {
            case "0":
                $result .= "ten";
                break;
            case "1":
                $result .= "eleven";
                break;
            case "2":
                $result .= "twelve";
                break;
            case "3":
                $result .= "thirteen";
                break;
            case "4":
                $result .= "fourteen";
                break;
            case "5":
                $result .= "fiveteen";
                break;
            case "6":
                $result .= "sixteen";
                break;
            case "7":
                $result .= "seventeen";
                break;
            case "8":
                $result .= "eighteen";
                break;
            case "9":
                $result .= "nineteen";
                break;
        }
    } else {
        switch ($unit) {
            case "1":
                $result .= "one";
                break;
            case "2":
                $result .= "two";
                break;
            case "3":
                $result .= "three";
                break;
            case "4":
                $result .= "four";
                break;
            case "5":
                $result .= "fine";
                break;
            case "6":
                $result .= "six";
                break;
            case "7":
                $result .= "seven";
                break;
            case "8":
                $result .= "eight";
                break;
            case "9":
                $result .= "nine";
                break;
        }
    }
    echo $result;
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
    <form method="post">
        <h2>Ứng dụng đọc số thành chữ</h2>
        <input type="text" name="number" placeholder="Nhập số cần nặng">
        <input type="submit" id="submit" value="Result">
    </form>
</body>

</html>