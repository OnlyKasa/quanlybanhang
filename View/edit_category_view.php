<?php
include 'Models/connectDB.php';
$sql = "select * from productgroup";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
$sql1 = "select * from category, productgroup WHERE cid= '" . $_REQUEST['cid'] . "' and category.gid = productgroup.gid";
$query1 = mysqli_query($conn, $sql1);
while ($r = mysqli_fetch_assoc($query1)) {
    $data1[] = $r;
    $cname = $r['cname'];
    $gid = $r['gid'];
}
if (!isset($_SESSION['r'])) {
    $_SESSION['r'] = "Ban chua dang nhap";
    header('location:login.php');
}
?>
<div class="col-lg-5">
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Danh mục
    </li>
    <li class="active">
        </i>Sửa danh mục <?php echo $r['cname'] ?>
    </li>
</ol>
<form role="form" method="post" action="Module/xulyeditcategory.php">
    <input type="hidden" name="cid" value="<?php echo $_REQUEST['cid']; ?>">
    <div class="form-group">
        <label>Nhập danh mục</label>
        <input class="form-control" name="cname" value="<?php echo $cname ?>">
    </div>
    <div class="form-group">
        <label>Loại sản phẩm</label>
        <select class="form-control" name="slgid">
            <?php
            foreach ($data as $value) {
                ?>
                <option <?php echo ($value['gid'] == $gid) ? 'selected' : ''; ?>
                        value="<?php echo $value['gid']; ?>"><?php echo $value['gname']; ?></option>
                <?php
            }
            ?> }
        </select>
    </div>
    <button type="submit" name="cmd" class="btn btn-default">OK</button>
    <a href="?page=viewc" class="btn btn-default">Qual lại</a>
</form>
</div>


