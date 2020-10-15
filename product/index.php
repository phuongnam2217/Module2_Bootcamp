<?php
function loadDataJSON($filename)
{
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}

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
            <div class="title">
                <p>DANH SÁCH SẢN PHẨM</p>
                <form action="" method="post">

                </form>
            </div>

            <?php $products = loadDataJSON('product.json'); ?>

            <div class="products">
                <?php foreach ($products as $product) :  ?>
                    <div class="product">
                        <p class="sku">Mã Số <?= $product['id']; ?> :<?= $product['sku']; ?></p>
                        <a href=""><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                        <br>
                        <div class="pricestock">
                            <span class="price">Giá :<?= $product['price'] ?></span>
                            <span class="stock">Còn lại :<?= $product['stock']; ?></span>
                        </div>
                        <div class="view-button">
                            <span class="view">Lượt xem: <?= $product['view']; ?></span>
                            <a href="">Mua Ngay</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="footer">

            <div class="infor">
                <h2>Đăng kí đơn hàng</h2>
                <form action="" method="get">
                    <div class="ten">
                        <span>Họ Và Tên: </span><input type="text" name="name" required>
                    </div>
                    <div class="sdt">
                        <span>Số điện thoại: </span><input type="text" name="phone" required>
                    </div>
                    <div class="email">
                        <span>Email:</span><input type="email" name="email" required>
                    </div>
                    <div class="maso">
                        <span>Mã Số Đơn Hàng: </span><input type="text" name="maso" required>
                    </div>
                    <div class="maso">
                        <span>Số lượng: </span><input type="text" name="soluong" required>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Gửi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>