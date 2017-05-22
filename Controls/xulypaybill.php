<?php
    session_start();

    include_once 'Models/connectDB.php';
    $sql="Update bill set bstatus2= 1 WHERE bid ='".$_REQUEST['bid']."'";
    mysqli_query($conn,$sql);
    $_SESSION['error']="Xuất thành công!";
    header("location:?page=viewbp");
?>