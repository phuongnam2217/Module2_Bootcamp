<?php
$customerlist = array(
  "1" => array(
    "ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "https://quatangme.com/upload/images/he-lo-top-10-girl-xinh-van-nguoi-me.jpg"
  ),
  "2" => array(
    "ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "https://i.pinimg.com/736x/78/90/e1/7890e13d8985d3a5360e3e62831575fd.jpg"
  ),
  "3" => array(
    "ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg"
  ),
  "4" => array(
    "ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "https://mcvideomd1fr.keeng.net/playnow/images/channel/avatar/20180604/0965196496_20180604094039.jpg "
  ),
  "5" => array(
    "ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "https://lh5.googleusercontent.com/-XL1IAlCZ5fg/W2cUTq-PtiI/AAAAAAAAAOQ/Y6nm898IAS80PstbtuSibMHPVGgsW67eQCLcBGAs/s1600/EmXinh2k__hinh-anh-gai-dep-nong-bong%2B%25288%2529.jpg "
  ),
);
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
  </style>
</head>

<body>
  <table>
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
      <?php
      foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><image src='" . $values['anh'] . "'width='100px' heigth='100px'/></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>

</html>