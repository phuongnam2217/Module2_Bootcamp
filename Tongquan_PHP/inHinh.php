<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="inHinh.php?type=1">Rectangle</a></li>
        <li><a href="inHinh.php?type=2">Triangle top-left</a></li>
        <li><a href="inHinh.php?type=3">Triangle top-right</a></li>
        <li><a href="inHinh.php?type=4">Triangle bottom-left</a></li>
        <li><a href="inHinh.php?type=5">Triangle bottom-right</a></li>
        <li><a href="inHinh.php?type=6">Tam giác đều</a></li>
    </ul>
    <?php
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        switch ($type) {
            case "1":
                for ($i = 0; $i < 3; $i++) {
                    echo str_repeat("*", 7) . "<br>";
                }
                break;
            case "2":
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j < $i) {
                            echo "&nbsp&nbsp";
                        } else {
                            echo "*";
                        }
                    }
                    echo "<br>";
                }
                break;
            case "3":
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j <= (6 - $i)) {
                            echo "*";
                        } else {
                            echo "&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                break;
            case "4":
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j < (6 - $i)) {
                            echo "&nbsp&nbsp";
                        } else {
                            echo "*";
                        }
                    }
                    echo "<br>";
                }
                break;
            case "5":
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j <= $i) {
                            echo "*";
                        } else {
                            echo "&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                break;
            case "6":
                for ($i = 5; $i >= 1; $i--) {
                    for ($j = 5; $j >= 1; $j--) {
                        if ($j > (6 - $i)) {
                            echo "&nbsp";
                        } else {
                            echo "*";
                        }
                    }
                    echo "<br>";
                }
                break;
        }
    }

    ?>
</body>

</html>