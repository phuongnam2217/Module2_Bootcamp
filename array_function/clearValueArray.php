<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 9, 8, 7, 6, 5, 4, 3, 2, 1];
print_r($arr);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    for ($i = 0; $i < count($arr); $i++) {
        if ($x == $arr[$i]) {
            array_splice($arr, $i, 1);
            array_push($arr, 0);
            $i--;
        }
    }
    echo "<br>";
    print_r($arr);
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
        <input type="text" name="x" placeholder="Nhập giá trị cần xóa khỏi mảng">
        <input type="submit" value="submit">
    </form>
</body>

</html>