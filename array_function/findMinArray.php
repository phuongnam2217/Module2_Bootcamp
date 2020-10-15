<?php
function generateArray($size)
{
    $arr = array();
    for ($i = 0; $i < $size; $i++) {
        $arr[$i] = rand(10, 100);
    }

    return $arr;
}
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}
if (isset($_GET['size'])) {
    $size = $_GET['size'];
    $arr = generateArray($size);
    print_r($arr);
    echo "<br>";
    echo findMin($arr);
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
    <form action="" method="get">
        <input type="text" name="size" placeholder="Size Array">
        <input type="submit" value="Submit">
    </form>
</body>

</html>