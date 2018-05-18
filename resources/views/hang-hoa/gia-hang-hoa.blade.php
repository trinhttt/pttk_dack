<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Giá hàng hóa</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
        <style>
            #example1 {
                background-color: rgb(240, 240, 240);
            }
            #example1 thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }
            #example1 tbody td:nth-child(6),#example1 tbody td:nth-child(7),
            #example1 tbody td:nth-child(9) {
                text-align: right;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .edit-btn {
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li><a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html">Danh sách nhà cung cấp</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>Danh sách nhà cung cấp</b>
                                        </h4>
                                    </div>
                                </div>
                                <!--end box header-->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">

                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" href="phanphoi_cungcap_tao-nha-cung-cap.html" target="_blank" title="Tạo Mới" data-placement="bottom" >
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                            <i class="fa fa-edit text-grey"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-grey"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                            <i class="fa fa-close text-grey"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-grey"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-grey"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-grey"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-grey"></i>
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
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Tìm kiếm theo</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tên</td>
                                                                    <td width="35%">
                                                                        <div class="input-group" >
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Tên...">
                                                                        </div>
                                                                    </td>
                                                                    <td style="padding-left: 120px;">Ngày tạo</td>
                                                                    <td>
                                                                        <div class="col-sm-5 no-padding">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                <input style="width: 150px" type="text" class="form-control" id="datepicker" placeholder="Từ...">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                <input style="width: 150px" type="text" class="form-control" id="datepicker2" placeholder="Đến...">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr> 
                                                            </tbody> 
                                                        </table>
                                                        <div class="box-footer clearfix">
                                                            <div class="pagination pagination-sm no-margin pull-right" style="padding-right: 19px">
                                                                <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end box search-->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset>
                                                        <table id="example1" class="table table-bordered table-striped">

                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 2%">STT</th>
                                                                    <th style="width: 10%">Tên</th>
                                                                    <th style="width: 10%">Địa chỉ</th>
                                                                    <th style="width: 5%">Mã số thuế</th>
                                                                    <th style="width: 5%">Ngày tạo</th>
                                                                    <th style="width: 5%">Thay đổi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">HĐ T07-1</a></td>                                                               
                                                                    <td class="text-left">307 Nguyễn Trãi, Thanh Xuân Hà Nội</td>
                                                                    <td class="text-left">012345</td>
                                                                    <td class="text-center">26-01-2017</td>
                                                                    <td style="text-align: center">
                                                                        <a id="btn_row1" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
																<tr id="row1">
																	<td colspan="10">
																		<div class="container-fluid">
																			<div class="row">
																				<div class="col-md-6">
																					<label>Tên</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="HĐ T07-1">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<label>Địa chỉ</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="307 Nguyễn Trãi, Thanh Xuân Hà Nội" >
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<label>Mã số thuế</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="012345">
																					</div>
																				</div>																			
																			</div>
																			<br>
																			<div class="row">
																				<div class="">
																					<div class="col-md-10"></div>
																					<div class="col-md-1">
																						<a href="" id="cancel_btn1" class="btn btn-default btn-block">Hủy</a>
																					</div>
																					<div class="col-md-1">
																						<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">Thái Sơn Nam</a></td>                                                               
                                                                    <td class="text-left">22-124 đường D1,Khu Đô thị mới Him lam, Tân Hưng, Quận 7</td>
                                                                    <td>678901</td>
                                                                    <td class="text-center">26-12-2014</td>
                                                                    <td style="text-align: center">
                                                                        <a id="btn_row2" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
																<tr id="row2">
																	<td colspan="10">
																		<div class="container-fluid">
																			<div class="row">
																				<div class="col-md-6">
																					<label>Tên</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="Thái Sơn Nam">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<label>Địa chỉ</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="22-124 đường D1,Khu Đô thị mới Him lam, Tân Hưng, Quận 7" >
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<label>Mã số thuế</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="678901">
																					</div>
																				</div>																			
																			</div>
																			<br>
																			<div class="row">
																				<div class="">
																					<div class="col-md-10"></div>
																					<div class="col-md-1">
																						<a href="" id="cancel_btn2" class="btn btn-default btn-block">Hủy</a>
																					</div>
																					<div class="col-md-1">
																						<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">LS</a></td>                                                               
                                                                    <td class="text-left">Cát Linh, Đống Đa, Hà Nội</td>
                                                                    <td>2342353</td>
                                                                    <td class="text-center">22-04-2015</td>
                                                                    <td style="text-align: center">
                                                                        <a href="phanphoi_cungcap_sua-cung-cap.html" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">Hàn Quốc</a></td>                                                               
                                                                    <td class="text-left">Hàn Quốc</td>
                                                                    <td>213635</td>
                                                                    <td class="text-center">22-11-2017</td>
                                                                    <td style="text-align:center">
                                                                        <a href="phanphoi_cungcap_sua-cung-cap.html" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--end main box-->
                        </div>
                        <!--end main col-->
                    </div>
                    <!--end main row-->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- DataTables -->
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script>
           $('#row1').hide();
			$('#btn_row1').click(function(){
				$('#row1').toggle();
				event.preventDefault();
			});
			$('#row2').hide();
			$('#btn_row2').click(function(){
				$('#row2').toggle();
				event.preventDefault();
			});
			$('#cancel_btn1').click(function(){
				$('#row1').toggle();
				event.preventDefault();
			});
			$('#cancel_btn2').click(function(){
				$('#row2').toggle();
				event.preventDefault();
			});
        </script>
		<div class="modal fade" id="popupConfirm" role="dialog">
            <div class="modal-dialog">		
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận lưu thông tin đã sửa</h4>
					</div>
                   
                    
                    <div class="modal-footer" style="margin-right:15px">
                        <div style="margin:0 auto;">
                            <button id="btnThanhToan" type="button" style="color:white;background-color:green" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = 'phanphoi_cungcap_danh-sach-nha-cung-cap.html'">OK</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </body>
</html>
