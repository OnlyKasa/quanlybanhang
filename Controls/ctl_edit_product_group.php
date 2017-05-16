
<?php
session_start();
include "../Models/class_product_group.php";
$pg = new productgroup();
if (isset($_POST['cmd'])) {
    if ($_POST['gname'] == "") {
        $_SESSION['error'] = "Bạn chưa nhập tên loại sản phẩm";
        header("location:../?page=editg&gid=".$_POST['gid']."&gname=".$_POST['gname']."");
    } else {
        $_SESSION['error'] = "Cập nhật thành công!";
        $pg->setgid($_POST['gid']);
        $pg->setgname($_POST['gname']);
        $pg->edit();
        header("location:../?page=viewg");
    }
}
?>
