<?php
function createArray($size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $array[$i][$j] = rand(10, 90);
        }
    }
    return $array;
}
if (isset($_GET['size'])) {
    $size = $_GET['size'];
    $array = createArray($size);
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . ",";
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
    echo "<br>";
    echo "Số lớn nhất trong mảng là :" . $max;
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
        <input type="text" name="size" placeholder="Size Matrix">
        <input type="submit" value="Submit">
    </form>
</body>

</html>