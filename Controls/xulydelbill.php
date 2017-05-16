<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/30/2017
 * Time: 8:26 AM
 */
include '../Models/connectDB.php';
$sql = "Delete from bill WHERE bid ='" . $_REQUEST['bid'] . "'";
mysqli_query($conn, $sql);
$_SESSION['error'] = "Xóa đơn hàng thành công!";
header("location:../?page=viewbe");
?>