<?php
// Thông tin kết nối đến cơ sở dữ liệu
$host = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root";   // Tên người dùng MySQL
$pass = "";           // Mật khẩu MySQL (trong trường hợp này không có mật khẩu)
$dbname = "mydatabase"; // Tên của cơ sở dữ liệu bạn muốn kết nối

// Thực hiện kết nối đến cơ sở dữ liệu
$conn = new mysqli($host, $username, $pass, $dbname);

// Kiểm tra xem kết nối có thành công không
if ($conn->connect_error) {
    // Nếu kết nối không thành công, hiển thị thông báo lỗi và kết thúc chương trình
    die("Kết nối không thành công: " . $conn->connect_error);
}
