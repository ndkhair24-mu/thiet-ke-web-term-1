<?php
// File: connect.php
$hostname = 'localhost';
$username = 'root';
$password = ''; // Để trống nếu bạn dùng XAMPP mặc định
$database = 'login_form'; // Đúng tên CSDL của bạn

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");
?>