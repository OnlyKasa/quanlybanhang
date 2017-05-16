<?php
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 4/12/2017
 * Time: 5:11 PM
 */
include 'Models/connectDB.php';
$sql="Select * from bill WHERE bstatus2 = 0 and bstatus1 =1";
$query=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
?>
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Đơn hàng
    </li>
    <li class="active">
        </i>Đơn hàng chưa thanh toán
    </li>
</ol>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <h3>Danh sách đơn hàng đang vận chuyển - chưa thanh toán</h3>
        <td>Mã đơn hàng</td>
        <td>Ngày đặt</td>
        <td>Tên khách hàng</td>
        <td>Địa chỉ khách hàng</td>
        <td>Email</td>
        <td>SDT</td>
        <td>Tổng tiền</td>
        <td>Chi tiết</td>
        <td>Xuất</td>
        <td>Hủy</td>
    </tr>
    </thead>
        <?php
        foreach ($data as $value) {
            echo "<tr>";
            echo "<td>" . $value['bid'] . "</td>";
            echo "<td>" . $value['bcreatedate'] . "</td>";
            echo "<td>" . $value['bcustomername'] . "</td>";
            echo "<td>" . $value['baddress'] . "</td>";
            echo "<td>" . $value['bemail'] . "</td>";
            echo "<td>" . $value['bphone'] . "</td>";
            echo "<td>" . $value['btotalmoney'] . "</td>";
            echo "<td><a href='?page=viewbdp&bid=" . $value['bid'] . "'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
            echo "<td><a href='Controls/xulypaybill.php?bid=" . $value['bid'] . "'><span class='glyphicon glyphicon-export'></span></a></td>";
            echo "<td><a href='Controls/xulydelbill.php?bid=" . $value['bid'] . "'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "</tr>";
        }
        echo "</table>";


        ?>

