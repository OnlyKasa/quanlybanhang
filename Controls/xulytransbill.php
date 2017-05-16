<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/30/2017
 * Time: 8:26 AM
 */
include '../Models/connectDB.php';
$sql="Update bill set bstatus1= 1, bdeliverydate ='".date("Y-m-d"). "' WHERE bid ='".$_REQUEST['bid']."'";
mysqli_query($conn,$sql);
$_SESSION['error']="Xuất thành công!";
header("location:../?page=viewbt");
?>