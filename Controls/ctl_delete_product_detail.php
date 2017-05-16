<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/26/2017
 * Time: 2:45 AM
 */
include '../Models/class_product_detail.php';
$pd = new productdetail();
$pd->setdid($_REQUEST['did']);
$pd->del();
include "../Models/class_product.php";
$p = new product();
$_SESSION["error"]="Xóa thành công!";
header("location:../?page=viewd&pid=".$_REQUEST['pid']."")
?>