<?php
$conn = new mysqli("localhost", "root", "") or die("không thể kết nối database");
mysqli_select_db($conn, "qlbh");
mysqli_query($conn, "SET NAMES 'UTF8'");
?>