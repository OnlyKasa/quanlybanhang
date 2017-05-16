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
        <form role="form" method="post" action="Module/xulyaddproductdetail.php">
            <input type="hidden" name="pid" value="<?php echo $_REQUEST['pid'] ?>">
            <input type="hidden" name="pname" value="<?php echo $_REQUEST['pname'] ?>">
            <div class="form-group">
                <label>Ẩnh</label>
                <input type="file" name="dimage" placeholder="Nhập tên ảnh của sản phẩm">
            </div>
            <div class="form-group">
                <label>Màu sắc</label>
                <input class="form-control" name="dcolor" placeholder="Nhập màu sắc sản phẩm">
            </div>
            <div class="form-group">
                <label>Kích cỡ</label>
                <input class="form-control" name="dsize" placeholder="Nhập kích cỡ sản phẩm">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input class="form-control" name="dcount" placeholder="Nhập số lượng sản phẩm">
            </div>
            <div class="form-group">
                <label>Ngày nhập</label>
                <input class="form-control" name="ddate" type="date" placeholder="Chọn ngày nhập sản phẩm">
            </div>
            <button type="submit" name="cmd" class="btn btn-default">Thêm</button>
            <button onclick="window.history.back()" class="btn btn-default">Quay lại</button>
        </form>
    </div>
</div>