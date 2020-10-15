<?php
class Application
{
    private $name;
    public static $count = 0;
    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public function __toString()
    {
        return "Application name: " . $this->name;
    }
}
echo "Total objects count: " . Application::$count . "<br>";
$app1 = new Application("Nam");
echo "Total objects count: " . Application::$count . "<br>";
$app2 = new Application("Phương");
echo "Total objects count: " . Application::$count . "<br>";
echo $app1 . '<br/>';
echo $app2 . '<br/>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>