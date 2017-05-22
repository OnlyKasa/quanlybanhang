<?php
    if (!isset($_SESSION['r'])){
    $_SESSION['r'] = "Yêu cầu đăng nhập";
    header('location:login.php');
}
?>

<div class="row">
    <div class="col-lg-5">
                <ol class="breadcrumb">
                    <li>
                        <i class="glyphicon glyphicon-heart-empty"></i> Loại sản phẩm
                    </li>
                    <li class="active">
                        </i>Thêm loại sản phẩm
                    </li>
                </ol>
                <form role="form" method="post" action="Controls/ctl_edit_product_group.php">
                    <input type="hidden" name="gid" value="<?php echo $_REQUEST['gid']; ?>">
                    <div class="form-group">
                        <label>Sửa loại sản phẩm</label>
                        <input class="form-control" name="gname" value="<?php echo $_REQUEST['gname']?>">
                    </div>
                    <button type="submit" name="cmd" class="btn btn-default">Sửa</button>
                    <a href="?page=viewg" class="btn btn-default">Qual lại</a>
                </form>
    </div>
</div>

