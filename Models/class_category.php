<?php

class category
{
    var $cid;
    var $cname;
    var $gid;
// get set model
//{
    public function setcid($cid)
    {
        $this->cid = $cid;
    }

    public function getcid()
    {
        return $this->cid;
    }

    public function setcname($cname)
    {
        $this->cname = $cname;
    }

    public function getcname()
    {
        return $this->cname;
    }

    public function setgid($gid)
    {
        return $this->gid = $gid;
    }

    public function getgid()
    {
        return $this->gid;
    }

    public function view()
    {
        include 'connectDB.php';
        //$sql ="select * from category";
        $sql = "Select category.cid, category.cname, productgroup.gname from category INNER JOIN productgroup ON category.gid = productgroup.gid";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        echo "<div class='col-lg-7'>";
        echo "<table id='example' class='display' cellspacing='0'>";
        echo "<thead>";
        echo "<tr>";
        echo "<tr>";
        echo "<td>Tên danh mục</td>";
        echo "<td>Tên loại</td>";
        echo "<td>Sửa</td>";
        echo "<td>Xóa</td>";
        echo "</tr>";
        echo "</thead>";
        foreach ($data as $value) {
            echo "<tr>";
            echo "<td>" . $value['cname'] . "</td>";
            echo "<td>" . $value['gname'] . "</td>";
            echo "<td><a href='?page=editc&cid=" . $value['cid'] . "'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='Controls/ctl_delete_category.php?cid=" . $value['cid'] . "'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
//}
// end get set
    public function add()
    {
        include "connectDB.php";
        $sql = "INSERT into category(cname,gid) values ('" . $this->cname . "','" . $this->gid . "')";
        mysqli_query($conn, $sql);
    }

    public function edit()
    {
        include 'connectDB.php';
        $sql = "UPDATE category SET cname='" . $this->cname . "',gid='" . $this->gid . "' WHERE cid='" . $this->cid . "'";
        mysqli_query($conn, $sql);
    }

    public function del()
    {
        include 'connectDB.php';
        $sql = "DELETE from category where cid='" . $this->cid . "'";
        mysqli_query($conn, $sql);
    }
}

?>