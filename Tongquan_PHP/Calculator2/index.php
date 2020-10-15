<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];
    $amount = $price * ($percent / 100) * 0.1;
    $discountPrice = $price - $amount;
    echo "Sản phẩm: " . $product . "<br/>";
    echo "Giá niêm yết của sản phẩm : " . $price . "<br/>";
    echo "Tỷ lệ chiết khấu(%) là : " . $percent . "<br/>";
    echo "Lượng chiết khấu : " . $amount . "<br/>";
    echo "Giá sản phẩm sau khi được chiết khấu: " . $discountPrice . "<br/>";
}
