<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>Đăng ký tài khoản thành công!</p>
    <a href="Login.php">Đi vào đăng nhập lại</a>
</body>

</html>
<?php
require 'connnect.php';
if (isset($_POST['btn_DangKy'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($pass)) {
        $sql = "INSERT INTO `myfirst` (`username`,`email`,`password`) VALUES('$username', '$email', md5('$pass'))";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Lưu giữ liệu không thành công!{$sql}" . $conn->error;
        }
    } else {
        header("location:Form_Register.php");
    }
}
