<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usd = $_POST["moneyUSD"];
    $rate = 23000;
    echo "<h2>Result: " . $usd * $rate . "</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Money</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="moneyUSD" id="" placeholder="Nhập USD">
        <input type="submit" value="Result">
    </form>
</body>

</html>