
<?php
session_start();
include_once "Models/class_product_detail.php";
if (isset($_POST['cmd'])) {
    if ($_POST['dimage'] == "" || $_POST['dsize'] == "" || $_POST['dcolor'] == "" || $_POST['dcount'] == "" || $_POST['ddate'] == "") {
        $_SESSION['error'] = "Bạn cần nhập các trường!";
        header("location:?page=addd&pid=".$_REQUEST['pid']."");
    } else {
        $_SESSION['error'] = "Thêm thành công!";
        $pd = new productdetail();
        $pd->setdimage($_POST['dimage']);
        $pd->setpid($_POST['pid']);
        $pd->setdcolor($_POST['dcolor']);
        $pd->setdsize($_POST['dsize']);
        $pd->setdcount($_POST['dcount']);
        $pd->setddate($_POST['ddate']);
        $pd->add();;
        header("location:?page=viewd&pid=".$_REQUEST['pid']."");
    }
}
?>

