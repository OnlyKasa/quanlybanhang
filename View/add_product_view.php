<?php
include 'Models/connectDB.php';
$sql="select * from category";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
?>
    <div class="col-lg-5">
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-heart-empty"></i>Sản phẩm
            </li>
            <li class="active">
               Thêm sản phẩm
            </li>
        </ol>
        <form role="form" method="post" action="Module/xulyaddproduct.php">

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input class="form-control" name="pname" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input class="form-control" name="pprice" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input class="form-control" name="pdescription" placeholder="Mô tả sản phẩm">
            </div>
            <div class="form-group">
                <label>Danh mục</label>
                <select class="form-control" name="slcid">
                    <?php
                    foreach ($data as $value )
                    {echo "<option value='.$value[cid].'>".$value['cname']."</option>";} ?>
                </select>
            </div>
            <button type="submit" name="cmd" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
        </form>
    </div>
</div>
</body>
</html>