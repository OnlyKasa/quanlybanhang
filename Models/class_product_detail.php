<?php

class productdetail
{
    var $did;
    var $dimage;
    var $pid;
    var $dcolor;
    var $dsize;
    var $dcount;
    var $ddate;

    public function setdid($did)
    {
        $this->did = $did;
    }

    public function getdid()
    {
        return $this->did;
    }

    public function setdimage($dimage)
    {
        $this->dimage = $dimage;
    }

    public function getdimage()
    {
        return $this->dimage;
    }

    public function setpid($pid)
    {
        return $this->pid = $pid;
    }

    public function getpid()
    {
        return $this->pid;
    }

    public function setdcolor($dcolor)
    {
        $this->dcolor = $dcolor;
    }

    public function getdcolor()
    {
        return $this->dcolor;
    }

    public function setdsize($dsize)
    {
        $this->dsize = $dsize;
    }

    public function getdsize()
    {
        return $this->dsize;
    }

    public function setdcount($dcount)
    {
        $this->dcount = $dcount;
    }

    public function getdcount()
    {
        return $this->dcount;
    }

    public function setddate($ddate)
    {
        $this->ddate = $ddate;
    }

    public function getddate()
    {
        return $this->ddate;
    }

    public function view()
    {
        include 'connectDB.php';
        //$sql ="select * from product";
        $sql = "Select productdetail.did, productdetail.dimage, product.pname, productdetail.dcolor, productdetail.dsize, productdetail.dcount from productdetail INNER JOIN product ON productdetail.pid = product.pid";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        echo "<table class='table table-striped table-bordered'>";
        echo "<tr>";
        echo "<td>Tên sản phẩm</td>";
        echo "<td>Ảnh</td>";
        echo "<td>Màu sắc</td>";
        echo "<td>Kích thước</td>";
        echo "<td>Số lượng</td>";
        echo "<td>Còn lại</td>";
        echo "<td>Sửa</td>";
        echo "<td>Xóa</td>";
        echo "</tr>";
        foreach ($data as $value) {
            echo "<tr>";
            echo "<td>" . $value['pname'] . "</td>";
            echo "<td><img src=images/" . $value['dimage'] . " width='180px'></td>";
            echo "<td>" . $value['dcolor'] . "</td>";
            echo "<td>" . $value['dsize'] . "</td>";
            echo "<td>" . $value['dcount'] . "</td>";
            echo "<td><a href='?page=editd&did=" . $value['did'] . "'><span class='glyphicon glyphicon-edit'></a></td>";
            echo "<td><a href='Controls/ctl_delete_product_detail.php?did=" . $value['did'] . "'><span class='glyphicon glyphicon-trash'></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function add()
    {
        include 'connectDB.php';
        $sql = "INSERT into productdetail(dimage,pid,dcolor,dsize,dcount,ddate) values ('" . $this->dimage . "','" . $this->pid . "','" . $this->dcolor . "','" . $this->dsize . "','" . $this->dcount . "','" . $this->ddate . "')";
        mysqli_query($conn, $sql);

    }

    public function edit()
    {
        include 'connectDB.php';
        $sql = "UPDATE productdetail SET dimage='" . $this->dimage . "',pid='" . $this->pid . "',dcolor='" . $this->dcolor . "',dsize='" . $this->dsize . "',dcount='" . $this->dcount . "',ddate='" . $this->ddate . "' WHERE did='" . $this->did . "'";
        mysqli_query($conn, $sql);
    }

    public function del()
    {
        include 'connectDB.php';
        $sql = "DELETE from productdetail where did='" . $this->did . "'";
        mysqli_query($conn, $sql);
    }
}

?>