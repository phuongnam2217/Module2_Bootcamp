<?php

use Models\Product;

function loadProductDataJSON($filename)
{
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}

$products = loadProductDataJSON('product.json');


$viewProduct = $products;
usort($viewProduct, function ($a, $b) {
    return $b['view'] - $a['view'];
});
$viewProduct = array_slice($viewProduct, 0, 4);

$soldProduct = $products;
usort($soldProduct, function ($a, $b) {
    return $b['sold'] - $a['sold'];
});

$soldProduct = array_slice($soldProduct, 0, 4);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>

    </style>
</head>

<body>

    <div class="wrap">
        <div class="header">
            <div class="images">
                <img src="images/slideshow.jpg" width="100%" height="" alt="">
            </div>
            <div class="text">
                <p class="text1">NAM FOOD</p>
                <p class="text2">CUNG CẤP THỰC PHẨM ĐẢM BẢO AN TOÀN VÀ CHẤT LƯỢNG SẢN PHẨM</p>
            </div>
        </div>
        <div class="container">
            <div class="titleViewMax title">
                <p>Sản Phẩm Có Lượt Xem Cao Nhất</p>
            </div>
            <div class="products">
                <?php foreach ($viewProduct as $product) :  ?>
                    <div class="product">
                        <p class="sku">Mã Số <?= $product['id']; ?> :<?= $product['sku']; ?></p>
                        <a href="" class="image"><img class="" src="<?= $product['image'] ?>" alt=""></a>
                        <br>
                        <div class="pricestock">
                            <span class="price">Giá :<?= $product['price'] ?></span>
                            <span class="stock">Còn lại :<?= $product['stock']; ?></span>
                        </div>
                        <p class="sold">Đã bán: <?= $product['sold']; ?></p>
                        <div class="view-button">
                            <span class="view">Lượt xem: <?= $product['view']; ?></span>
                            <a href="">Mua Ngay</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="titleViewMax title">
                <p>Sản Phẩm Bán Chạy Nhất</p>
            </div>
            <div class="products">
                <?php foreach ($soldProduct as $product) :  ?>
                    <div class="product">
                        <p class="sku">Mã Số <?= $product['id']; ?> :<?= $product['sku']; ?></p>
                        <a href=""><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                        <br>
                        <div class="pricestock">
                            <span class="price">Giá :<?= $product['price'] ?></span>
                            <span class="stock">Còn lại :<?= $product['stock']; ?></span>
                        </div>
                        <p class="sold">Đã bán: <?= $product['sold']; ?></p>
                        <div class="view-button">
                            <span class="view">Lượt xem: <?= $product['view']; ?></span>
                            <a href="">Mua Ngay</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="title">
                <p>DANH SÁCH SẢN PHẨM</p>
            </div>



            <div class="products">
                <?php foreach ($products as $product) :  ?>
                    <div class="product">
                        <p class="sku">Mã Số <?= $product['id']; ?> :<?= $product['sku']; ?></p>
                        <a href=""><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                        <div class="pricestock">
                            <span class="price">Giá :<?= $product['price'] ?></span>
                            <span class="stock">Còn lại :<?= $product['stock']; ?></span>
                        </div>
                        <p class="sold">Đã bán: <?= $product['sold']; ?></p>
                        <div class="view-button">
                            <span class="view">Lượt xem: <?= $product['view']; ?></span>
                            <a href="">Mua Ngay</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <?php
        function loadRegistrations($filename)
        {
            $jsondatainfo = file_get_contents($filename);
            $arr_data = json_decode($jsondatainfo, true);
            return $arr_data;
        }
        function saveDATAJSON($filename, $name, $phone, $email, $maso, $soluong)
        {
            try {
                $contact = array('name' => $name, 'phone' => $phone, 'email' => $email, 'maso' => $maso, 'soluong' => $soluong);
                $arr_data = loadRegistrations($filename);
                array_push($arr_data, $contact);
                $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                file_put_contents($filename, $jsondata);
                echo "<script> alert('Gửi thành công')  </script>";
            } catch (Exception $e) {
                echo "<script> alert('Lỗi')  </script>";
            }
        }
        $nameErr = NULL;
        $phoneErr = NULL;
        $emailErr = NULL;
        $masoErr = NULL;
        $soluongErr = NULL;
        $name = NULL;
        $phone = NULL;
        $email = NULL;
        $maso = NULL;
        $soluong = NULL;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $maso = $_POST['maso'];
            $soluong = $_POST['soluong'];
            $has_error = false;
            if (empty($name)) {
                $nameErr = "*Tên không được để trống";
                $has_error = true;
            }
            if (empty($phone)) {
                $phoneErr = "*Số điện thoại không được để trống";
                $has_error = true;
            }
            if (empty($email)) {
                $emailErr = "*Email không được để trống";
                $has_error = true;
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "*Định dạng email sai (xxx@xxx.xxx.xx)!";
                    $has_error = true;
                }
            }
            if (empty($maso)) {
                $masoErr = "*Mã số không được để trống";
                $has_error = true;
            }
            if (empty($soluong)) {
                $soluongErr = "Số lượng không được để trống";
                $has_error = true;
            }
            if ($has_error === false) {
                saveDataJSON('info.json', $name, $email, $phone, $maso, $soluong);
                $name = NULL;
                $email = NULL;
                $phone = NULL;
                $maso = NULL;
                $soluong = NULL;
            }
        }
        ?>
        <div class="footer">
            <div class="infor">
                <h2>Đăng kí đơn hàng</h2>
                <form action="" method="post">
                    <div class="ten">
                        <span>Họ Và Tên: </span><input type="text" name="name" value="<?= $name; ?>">
                    </div>
                    <div class="Erorr"><?= $nameErr; ?></div>
                    <div class="sdt">
                        <span>Số điện thoại: </span><input type="text" name="phone" value="<?= $phone ?>">
                    </div>
                    <div class="Erorr"><?= $phoneErr; ?></div>
                    <div class="email">
                        <span>Email:</span><input type="email" name="email" value="<?= $email; ?>">
                    </div>
                    <div class="Erorr"><?= $emailErr; ?></div>
                    <div class="maso">
                        <span>Mã Sản Phẩm: </span><input type="number" name="maso" value="<?= $maso; ?>">
                    </div>
                    <div class="Erorr"><?= $masoErr; ?></div>
                    <div class="maso soluong">
                        <span>Số lượng: </span><input type="number" name="soluong" value="<?= $soluong; ?>">
                    </div>
                    <div class="Erorr"><?= $soluongErr; ?></div>
                    <div class="submit">
                        <input type="submit" value="Gửi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>