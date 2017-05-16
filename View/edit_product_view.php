<?php
include '../Models/connectDB.php';
$sql="select * from category";
$query=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
$sql1="select * from product, category WHERE pid='".$_REQUEST['pid']."' and product.cid = category.cid";
$query1=mysqli_query($conn,$sql1);
$data1=array();
$r=mysqli_fetch_assoc($query1);
    $data1[] = $r;
if (!isset($_SESSION['r'])) {
    $_SESSION['r'] = "Ban chua dang nhap";
    header('location:login.php');
}
?>

            <div class="col-lg-5">
                <ol class="breadcrumb">
                    <li>
                        <i class="glyphicon glyphicon-heart-empty"></i> Sản phẩm
                    </li>
                    <li class="active">
                        Sửa
                    </li>
                </ol>
                <form role="form" method="post" action="../Controls/ctl_edit_product.php">
                    <input type="hidden" name="pid" value="<?php echo $_REQUEST['pid'];?>">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" name="pname" value="<?php echo $r['pname']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" name="pprice" value="<?php echo $r['pprice']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input class="form-control" name="pdescription" value="<?php echo $r['pdescription']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select class="form-control" name="slcid">
                            <?php
                            foreach ($data as $value) {
                                ?>
                                <option <?php
                                if ($value['cid'] == $r['cid']){
                                    echo "selected";
                                }
                                ?> value="<?php  echo $value['cid'];?>"><?php  echo $value['cname'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="cmd" class="btn btn-default">Sửa</button>
                    <a href="/index.php?page=viewp" class="btn btn-default">Quay lại</a>
                </form>
            </div>
