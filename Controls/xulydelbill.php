<?php
    session_start();
    include_once 'Models/connectDB.php';
    $sql = "Delete from bill WHERE bid ='" . $_REQUEST['bid'] . "'";
    mysqli_query($conn, $sql);
    $_SESSION['error'] = "Xóa đơn hàng thành công!";
    header("location:?page=viewbe");
?>