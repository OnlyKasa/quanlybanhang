<?php

include 'Models/connectDB.php';
$sql = "select * from productdetail WHERE did='" . $_REQUEST['did'] . "'";
$query = mysqli_query($conn, $sql);
$data = array();
$r = mysqli_fetch_assoc($query);
$data1[] = $r;
?>

<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Sản phẩm
    </li>
    <li class="active">
        </i>Thêm chi tiết cho sản phẩm
    </li>
</ol>
<div class="row">
    <div class="col-lg-5">
        <form role="form" method="post" action="Module/xulyeditproductdetail.php">
            <input type="hidden" name="pid" value="<?php echo $_REQUEST['pid'] ?>">
            <input type="hidden" name="did" value="<?php echo $_REQUEST['did'] ?>">
            <div class="form-group">
                <label>Ẩnh</label>
                <input type="file" " name="dimage" value="<?php echo $r['dimage']; ?>">
            </div>
            <div class="form-group">
                <label>Màu sắc</label>
                <input class="form-control" name="dcolor" value="<?php echo $r['dcolor'] ?>">
            </div>
            <div class="form-group">
                <label>Kích cỡ</label>
                <input class="form-control" name="dsize" value="<?php echo $r['dsize'] ?>">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input class="form-control" name="dcount" value="<?php echo $r['dcount'] ?>">
            </div>
            <div class="form-group">
                <label>Ngày nhập</label>
                <input class="form-control" name="ddate" type="date" value="<?php echo $r['ddate'] ?>">
            </div>
            <button type="submit" name="cmd" class="btn btn-default">Sửa</button>
            <a href="?page=viewd&pid=<?php echo $_REQUEST['pid'] ?>" class="btn btn-default">Quay lại</a>
        </form>
    </div>
</div>
