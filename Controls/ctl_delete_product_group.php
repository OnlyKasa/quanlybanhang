<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/25/2017
 * Time: 12:00 AM
 */
include '../Models/class_product_group.php';
$pg = new productgroup();
$pg->setgid($_REQUEST['gid']);
$pg->del();
$_SESSION['error']="Xóa thành công!";
header("location:../?page=viewg");
?>
