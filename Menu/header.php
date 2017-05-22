<div class="navbar-header">
    <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-home"></i> Trang chủ</a>
</div>
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user'] ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Hồ sơ</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Cài đặt</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="?page=logout"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
            </li>
        </ul>
    </li>

</ul>