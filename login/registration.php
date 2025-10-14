<?php
session_start();
require_once 'connect.php'; // Sử dụng kết nối từ tệp connect.php

// Lấy dữ liệu từ form
$name = $_POST['user'];
$pass = $_POST['password'];
$mssv = $_POST['mssv'];
$sdt = $_POST['sdt'];
$ngay_sinh = $_POST['ngay_sinh'];

// Kiểm tra xem tên đăng nhập hoặc mssv đã tồn tại chưa
// SỬ DỤNG ĐÚNG TÊN BẢNG LÀ "hihi"
$s = "SELECT * FROM hihi WHERE name='$name' OR mssv='$mssv'";
$result = mysqli_query($con, $s);

if (mysqli_num_rows($result) > 0) {
    echo "Tên đăng nhập hoặc Mã số sinh viên đã tồn tại.";
} else {
    // Thêm người dùng mới vào bảng "hihi"
    $reg = "INSERT INTO hihi(name, password, mssv, sdt, ngay_sinh) VALUES ('$name', '$pass', '$mssv', '$sdt', '$ngay_sinh')";
    
    if (mysqli_query($con, $reg)) {
        header("location:login.php");
    } else {
        echo "Lỗi khi đăng ký: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>