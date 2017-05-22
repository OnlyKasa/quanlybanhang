<?php
    include_once 'Models/connectDB.php';
    $sql = "Select billdetail.bdcount, billdetail.bdunitprice, billdetail.bdmoney, productdetail.dcolor, productdetail.dsize, product.pname from billdetail, product, productdetail WHERE productdetail.did = billdetail.did and product.pid = productdetail.pid AND billdetail.bid ='" . $_REQUEST['bid'] . "'";
    $query = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    $sql1="select * from bill WHERE bill.bid='".$_REQUEST['bid']."'";
    $query1=mysqli_query($conn,$sql1);
    $data1=array();
    $r = mysqli_fetch_assoc($query1);
    $data1[] = $r;
?>
<div class="col-lg-6">
    <table class='table'>
        <tr>
            <td>Chi tiết đơn hàng </td>
            <td><?php echo $r['bid']?></td>
        </tr>
        <tr>
            <td>Ngày đặt hàng</td>
            <td><?php echo $r['bcreatedate']?></td>
        </tr>
        <tr>
            <td>Tên khách hàng</td>
            <td><?php echo $r['bcustomername']?></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><?php echo $r['baddress']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $r['bemail']?></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><?php echo $r['bphone']?></td>
        </tr>
        <tr>
            <td>Tổng tiền</td>
            <td><?php echo $r['btotalmoney']?></td>
        </tr>
    </table>

    <td><a href='Module/xulytransbill.php?bid=<?php echo $r['bid'];?>'><span class='glyphicon glyphicon-export'></span></a></td>
    <td><a href='Module/xulydelbill.php?bid=<?php echo $r['bid']; ?>' onclick="return confirm('Are you sure you want to Remove?');"><span class='glyphicon glyphicon-trash'></span></a></td>
    <td><a href='?page=viewbp'><span class='glyphicon glyphicon-arrow-left'></span></a></td>
</div>
<table class='table table-striped table-bordered'>
    <tr>
        <td>Tên sản phẩm</td>
        <td>Màu sắc</td>
        <td>Kích cỡ</td>
        <td>Đơn giá</td>
        <td>Số lượng</td>
        <td>Tổng tiền</td>
    </tr>
        <?php
            foreach ($data as $value) {
                echo "<tr>";
                echo "<td>" . $value['pname'] . "</td>";
                echo "<td>" . $value['dcolor'] . "</td>";
                echo "<td>" . $value['dsize'] . "</td>";
                echo "<td>" . $value['bdunitprice'] . "</td>";
                echo "<td>" . $value['bdcount'] . "</td>";
                echo "<td>" . $value['bdmoney'] . "</td>";
                echo "</tr>";
            }
        ?>
</table>


