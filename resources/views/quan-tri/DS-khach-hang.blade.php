<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DS khách hàng</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="dist/css/back-to-top.css">
        <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
        <style>
            #example1 th {
                color: white;
                background-color: #3c8dbc;
                font-weight: bold;
            }

            #example1 th, #example1 td {
                text-align: center;
            }


            #example1 {
                background-color: rgb(240, 240, 240);
            }

            #example1 thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }

            #example1 tbody td:nth-child(2),
            #example1 tbody td:nth-child(4) {
                text-align: left;
            }

            #example1 tbody td:nth-child(),
            #example1 tbody td:nth-child() {
                text-align: right;
            }
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .menu-button {
                background-color: #fcf9f9;
                margin-top: 20px;
                padding-top: 20px;
                padding-right: 25px;
            }
            .smallBtn {
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
            }
            .custom-chk {
                padding-left: 15px;
            }
        </style>
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">

                <!-- Logo -->
                <a href="phanphoi_index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">LAP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-left: -15px;">
                        <img style="width:60px; height:50px;margin-top: 5px" class="img-responsive pull-left" src="dist/img/logo.png" alt="Photo">
                        <div style="margin-top: -5px">
                        <b style="margin-right: 35px;margin-bottom: 20px">Quản lý</b>
                        <span style="position: absolute; margin-top: 15px; margin-left: -100px; font-size: 14px;font-weight: bold"><small>Cửa hàng Laptop</small></span>
                        </div>
                    </span>

                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>

                    </a>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <!--<span class="label label-warning">-->
                                    <!--0-->
                                    <!--</span>-->
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Bạn có 0 thông báo mới</li>
                                    <li>
                                        <ul class="menu">
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-nhieu-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#1 đã hoàn thành-->
                                            <!--<div class="pull-right">1 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_danh-sach-phieu-giu-hang.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89665-0 đang chờ xử lý-->
                                            <!--<div class="pull-right">8 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="sua_phieu_0.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89659-0 đang chờ xử lý <p/> đổi trả-->
                                            <!--<div class="pull-right">55 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89664-0 đang chờ xử lý -->
                                            <!--<div class="pull-right">1 giờ trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-nhieu-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#2 đang xử lý-->
                                            <!--<div class="pull-right">1 giờ trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user.jpeg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Trinh Thai</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">

                                        <p>Trinh Thai<small>Admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="phanphoi_nguoidung_thong-tin-nguoi-dung.html" class="btn btn-default btn-flat">Hồ sơ</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.html" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="#" id="scrollContainer" class="navbar-custom-menu pull-left" data-toggle="modal" data-target="#noteModal">
                        <div id="scrollBox">
                            <!--<p>Ngày 31/12/2017: Inbox để biết thêm chi tiết</p>-->
                            <!--<p>Ngày 05/01/2018: Hãy sử lý đơn hàng HD-83157-1</p>-->
                        </div>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Trinh Thai</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active">
                            <a href="phanphoi_index.html">
                                <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-o"></i> <span>Đơn hàng</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_donhang_lap-phieu.html"><i class="fa fa-edit"></i> Lập Phiếu</a></li>

                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-dang-xu-ly.html">
                                        <i class="fa fa-list-alt"></i>
                                        <span>Phiếu đang xử lý</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary bg-green">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-hoan-thanh.html">
                                        <i class="fa fa-files-o"></i>
                                        <span>Phiếu đã hoàn thành</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-giu-hang.html">
                                        <i class="fa fa-book"></i>
                                        <span>Phiếu giữ hàng</span>
                                        <!--<span class="pull-right-container">-->
                                            <!--<span class="label pull-right bg-green">new</span>-->
                                            <!--<span class="label pull-right bg-red">2</span>-->
                                        <!--</span>-->
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_lich-giao-hang-tong.html">
                                        <i class="fa fa-calendar-minus-o"></i>
                                        <span>Lịch giao hàng</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Hàng hoá</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_hanghoa_gia-hang-hoa.html"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                                <li class=""><a href="phanphoi_hanghoa_ton-kho.html"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>

                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="phanphoi_hanghoa_tao-dot-nhap-kho.html"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                        <li class=""><a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pencil-square"></i> <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="bao-cao/phanphoi_baocao_doanh-thu.html"><i class="fa fa-line-chart"></i> Doanh thu</a>
                                </li>


                            </ul>
                        </li>

                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-database"></i> <span>Quản trị</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="phanphoi_khachhang_danh-sach-khach-hang.html"><i class="fa fa-users"></i> Danh sách khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html"><i class="fa fa-users"></i> Danh sách nhà cung cấp</a>
                                </li>


                            </ul>
                        </li>
                        <!--<li class="">-->
                        <!--<a href="phanphoi_quy-trinh-xu-ly.html">-->
                        <!--<i class="fa fa-question-circle"></i> <span>Help</span>-->
                        <!--</a>-->
                        <!--</li>						-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard"></i> Trang Chủ</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=""></i> Danh sách khách hàng</a>
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>Danh sách khách hàng</b>
                                        </h4>
                                    </div>
                                </div>
                                <!--end box header-->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" onclick="window.location.href = 'phanphoi_khachhang_tao-khach-hang.html'">
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                            <i class="fa fa-edit text-gray"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-gray"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                            <i class="fa fa-close text-gray"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-gray"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-gray"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-gray"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="modal" title="In" data-placement="bottom" data-target="#confirm-print">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-purple"></i>
                                            <span><strong>Import Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                            <i class="fa fa-file-excel-o text-green"></i>
                                            <span><strong>Xuất Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-red"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Tìm kiếm theo</h3>
                                        </div>
                                        <div class="box-body">
                                            <table class="table" style="margin: 0 auto;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 10%; padding-top: 15px;"><strong>Tên</strong></td>
                                                        <td style="width: 40%">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                <input type="text" class="form-control" placeholder="Tên...">
                                                            </div>
                                                        </td>
                                                        <td  style="width: 10%; padding-top: 15px;"><strong>Xếp hạng</strong></td>
                                                        <td  style="width: 50%">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <select class="form-control select2" multiple="multiple" data-placeholder="Hãy lựa chọn..." style="height: 24px;">
                                                                    <option>Khách mới</option>
                                                                    <option>Khách quen</option>
                                                                    <option>Khách VIP</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer clearfix">
                                            <div class="pagination pagination-sm no-margin pull-right">
                                                <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên</th>
                                                        <th>Ảnh đại diện</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Xếp hạng</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Thay đổi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--<tr>-->
                                                        <!--<td>1</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty HPH</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/hph.jpg" style="height: 40px; width: 40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Nguyễn Trãi, Thanh Xuân Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>15-12-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>2</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty 2B -Anh Tuấn</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/viettel.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Nguyễn Hoàng, Mỹ Đình 2 Từ Liêm Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>11-12-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>3</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty Vạn Xuân</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/amazon.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>223 Láng, Hai Bà Trưng Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">KHÁCH QUEN</span>-->
                                                        <!--</td>-->
                                                        <!--<td>06-03-2015</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>4</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TV-TK Điện lực HN-Chú Lợi</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/ba.jpg" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>527 Ngô Quyền , Quận Bình Thạch, Hồ Chí Minh</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-danger">KHÁCH VIP</span>-->
                                                        <!--</td>-->
                                                        <!--<td>19-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>5</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty Vinh Thanh</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_vinhthanh.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>527 Ngô Quyền , TP.Hải phong</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>19-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>6</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TNHH Vinafo</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_vinafo.gif" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>508 Trường Chinh , TP.Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-danger">KHÁCH VIP</span>-->
                                                        <!--</td>-->
                                                        <!--<td>30-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>7</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TNHH GoldenGate</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_goldengate.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Trường Chinh , TP.Sơn La</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>20-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <tr>
                                                        <td>8</td>
                                                        <td>
                                                            <a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty FPT SHOP</a>
                                                        </td>
                                                        <td>
                                                            <img src="dist/img/logo_fptshop.jpg" style="height: 40px; width:40px;" alt="">
                                                        </td>
                                                        <td>330 Yên Sơn , TP.Hòa Bình</td>
                                                        <td>
                                                            <span class="label label-primary">KHÁCH MỚI</span>
                                                        </td>
                                                        <td>19-10-2017</td>
                                                        <td>
                                                            <a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- ./wrapper -->
        <footer class="main-footer">
            <!--<strong>Copyright &copy; 2017 <a href="http://www.thaisonbac.com.vn/">Bản quyền thuộc Thái Sơn Bắc</a>.</strong>-->
            <a href="#0" class="cd-top">Top</a>
        </footer>
        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="dist/js/back-to-top.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- bootstrap datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Select2 -->
        <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
        <!-- page script -->
        <script>
                                                                                $(function () {
                                                                                    $('#example1').DataTable({
                                                                                        'paging': true,
                                                                                        'lengthChange': true,
                                                                                        'searching': false,
                                                                                        'ordering': true,
                                                                                        'info': true,
                                                                                        'autoWidth': true,
                                                                                        'language': {
                                                                                            "lengthMenu": "Hiển thị _MENU_ dòng",
                                                                                            "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                                                                                            "paginate": {
                                                                                                "first": "Trang đầu",
                                                                                                "last": "Trang cuối",
                                                                                                "next": "Tiếp",
                                                                                                "previous": "Trước"
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                });
                                                                                $(function () {
                                                                                    //Date picker
                                                                                    $('#datepicker').datepicker({
                                                                                        autoclose: true
                                                                                    });
                                                                                });
                                                                                //Initialize Select2 Elements
                                                                                $('.select2').select2();
        </script>

        <script>
            $('#row1').hide();
            $('#btn_row1').click(function () {
                $('#row1').toggle();
                event.preventDefault();
            })
            $('#row2').hide();
            $('#btn_row2').click(function () {
                $('#row2').toggle();
                event.preventDefault();
            })
            $('#row3').hide();
            $('#btn_row3').click(function () {
                $('#row3').toggle();
                event.preventDefault();
            })
            $('#row4').hide();
            $('#btn_row4').click(function () {
                $('#row4').toggle();
                event.preventDefault();
            })
            $('#row5').hide();
            $('#btn_row5').click(function () {
                $('#row5').toggle();
                event.preventDefault();
            })
            $('#row6').hide();
            $('#btn_row6').click(function () {
                $('#row6').toggle();
                event.preventDefault();
            })
            $('#row7').hide();
            $('#btn_row7').click(function () {
                $('#row7').toggle();
                event.preventDefault();
            })
            $('#row8').hide();
            $('#btn_row8').click(function () {
                $('#row8').toggle();
                event.preventDefault();
            })
        </script>

        <div class="modal fade" id="confirm-print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Xác nhận in</h4>
                    </div>
                    <div class="modal-body">
                        <label>Bạn có muốn in?</label>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Đóng"/>
                        <input onclick="location.href = 'phanphoi_khachhang_chi-tiet-khach-hang.html';" type="button" class="btn btn-success btn-ok" value="Có"/>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>