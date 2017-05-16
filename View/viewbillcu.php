<?php
/**
 * Created by PhpStorm.
 * User: Then
 * Date: 3/30/2017
 * Time: 7:40 AM
 */
include 'Models/connectDB.php';
$sql="Select * from bill where cuuser='".$_REQUEST['cuuser']."'";
$query=mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

?>
<ol class="breadcrumb">
    <li>
        <i class="glyphicon glyphicon-heart-empty"></i> Khách hàng
    </li>
    <li class="active">
        Đơn hàng đã mua
    </li>
</ol>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <td>Mã đơn hàng</td>
        <td>Ngày đặt</td>
        <td>Ngày giao hàng</td>
        <td>Tên khách hàng</td>
        <td>Tổng tiền</td>
        <td>Chi tiết</td>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($data as $value) {
        echo "<tr>";
        echo "<td>".$value['bid']."</td>";
        echo "<td>".$value['bcreatedate']."</td>";
        echo "<td>".$value['bdeliverydate']."</td>";
        echo "<td>".$value['bcustomername']."</td>";
        echo "<td>".$value['btotalmoney']."</td>";
        echo "<td><a href='?page=viewbda&bid=".$value['bid']."'><span class='glyphicon glyphicon-list-alt'></span></a></td>";
        echo "</tr>";
    }

    ?>
    </tbody>

</table>


