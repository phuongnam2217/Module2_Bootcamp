<?php
$customerlist = array(
    "0" => array(
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983-08-20",
        "address" => "Hà Nội",
        "image" => "https://quatangme.com/upload/images/he-lo-top-10-girl-xinh-van-nguoi-me.jpg"
    ),
    "1" => array(
        "name" => "La Thị Lung",
        "day_of_birth" => "1983-08-21",
        "address" => "Hải Phòng",
        "image" => "https://i.pinimg.com/736x/78/90/e1/7890e13d8985d3a5360e3e62831575fd.jpg"
    ),
    "2" => array(
        "name" => "Phong Hoa Tuyết Nguyệt",
        "day_of_birth" => "1983-08-22",
        "address" => "Hồ Chí Minh",
        "image" => "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg"
    ),
    "3" => array(
        "name" => "Cô Phương Tự Thưởng",
        "day_of_birth" => "1983-08-17",
        "address" => "Huế",
        "image" => "https://mcvideomd1fr.keeng.net/playnow/images/channel/avatar/20180604/0965196496_20180604094039.jpg "
    ),
    "4" => array(
        "name" => "Xuân Hoa Thu Nguyệt",
        "day_of_birth" => "1983-08-19",
        "address" => "Hà Nội",
        "image" => "https://lh5.googleusercontent.com/-XL1IAlCZ5fg/W2cUTq-PtiI/AAAAAAAAAOQ/Y6nm898IAS80PstbtuSibMHPVGgsW67eQCLcBGAs/s1600/EmXinh2k__hinh-anh-gai-dep-nong-bong%2B%25288%2529.jpg "
    )
);
function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date))) {
            continue;
        }
        if (!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date))) {
            continue;
        }
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST['from'];
    $to_date = $_POST['to'];
}
$filtered_customers = searchByDate($customerlist, $from_date, $to_date);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hiển thị danh sách khách hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="">
        <form action="" method="post">
            <label for="">From:</label><input type="text" name="from" placeholder="yyyy-mm-dd">
            <label for="">To</label><input type="text" name="to" placeholder="yyyy-mm-dd">
            <input type="submit" value="Search">
        </form>
    </div>
    <table border="0">
        <thead>
            <h2>Danh sách khách hàng</h2>
        </thead>
        <tbody>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
            </tr>
            <?php if (count($filtered_customers) === 0) : ?>
                <tr>
                    <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
                </tr>
            <?php endif; ?>

            <?php foreach ($filtered_customers as $index => $customer) : ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $customer['name']; ?></td>
                    <td><?php echo $customer['day_of_birth']; ?></td>
                    <td><?php echo $customer['address']; ?></td>
                    <td>
                        <div class="profile"><img src="<?php echo $customer['image']; ?>" /></div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>