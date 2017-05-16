<?php
include 'Models/connectDB.php';
$sql="select * from productgroup";
$query=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
?>
<div class="row">
    <div class="col-lg-5">
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-heart-empty"></i> Danh mục
            </li>
            <li class="active">
                </i>Thêm danh mục
            </li>
        </ol>
        <form role="form" method="post" action="Module/xulyaddcategory.php">

            <div class="form-group">
                <label>Thêm danh mục</label>
                <input class="form-control" name="cname" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
                <label>Loại sản phẩm</label>
                <select class="form-control" name="slgid">
                    <?php
                    foreach ($data as $value )
                    {echo "<option value='.$value[gid].'>".$value['gname']."</option>";} ?>
                </select>
            </div>
            <button type="submit" name="cmd" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
    </form>
</div>
</div>
