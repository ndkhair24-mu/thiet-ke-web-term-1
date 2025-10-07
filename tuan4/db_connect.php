<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_form"; // tên database bạn đã tạo trong HeidiSQL

// Kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
