<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function loadRegistrations($filename)
    {
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }
    function saveDataJSON($filename, $name, $email, $phone)
    {
        try {
            $contact = array('name' => $name, 'email' => $email, 'phone' => $phone);
            $arr_data = loadRegistrations($filename);
            array_push($arr_data, $contact);
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsondata);
            echo "Lưu dữ liệu thành công";
        } catch (Exception $e) {
            echo "Lỗi";
        }
    }
    $nameErr = NULL;
    $emailErr = NULL;
    $phoneErr = NULL;
    $name = NULL;
    $email = NULL;
    $phone = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $has_error = false;
        if (empty($name)) {
            $nameErr = "Tên không được để trống";
            $has_error = true;
        }
        if (empty($email)) {
            $emailErr = "Email không được để trống";
            $has_error = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
                $has_error = true;
            }
        }
        if ($has_error === false) {
            saveDataJSON('data.json', $name, $email, $phone);
            $name = NULL;
            $email = NULL;
            $phone = NULL;
        }
    }
    ?>
    <h2>Registration form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Details</legend>
            Name: <input type="text" name="name" value="<?php echo $name ?>">
            <span class="error">* <?php echo $nameErr; ?></span><br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email ?>">
            <span class="error">*<?php echo $emailErr ?></span><br><br>
            Phone: <input type="text" name="phone" value="<?php echo $phone ?>">
            <span class="error">*<?php echo $phoneErr ?></span><br><br>
            <input type="submit" name="submit" value="Register">
            <!-- <p><span class="error">* required field.</span></p> -->
        </fieldset>
    </form>
    <?php
    $registrations = loadRegistrations('data.json');
    ?>
    <h2>Registration list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($registrations as $registration) : ?>
            <tr>
                <td><?= $registration['name']; ?></td>
                <td><?= $registration['email']; ?></td>
                <td><?= $registration['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>