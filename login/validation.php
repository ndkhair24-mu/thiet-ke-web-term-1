<?php
session_start();
require_once 'connect.php'; // Sử dụng kết nối từ tệp connect.php

// Lấy dữ liệu từ form
$name = $_POST['user'];
$pass = $_POST['password'];

// Kiểm tra thông tin đăng nhập trong bảng "hihi"
$s = "SELECT * FROM hihi WHERE name='$name' AND password='$pass'";
$result = mysqli_query($con, $s);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('location:login.php');
}

mysqli_close($con);
?>