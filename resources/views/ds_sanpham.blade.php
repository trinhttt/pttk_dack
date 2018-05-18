@extends('main')

@section('content')
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
@endsection

@section('content1')
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
                                                        <th style="width: 3%">Mã LapTop</th>
                                                        <th style="width: 14%">Tên LapTop</th>
                                                        <th style="width: 5%">Hãng sản xuất</th>
                                                        <th style="width: 5%">Màn hình</th>
                                                        <th style="width: 4%">RAM</th>
                                                        <th style="width:4%">ROM</th>
                                                        <th style="width: 4%">CPU</th>
                                                        <th style="width: 5%">SL còn lại</th>
                                                        <th style="width: 3%">Thay đổi</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $stt=0?>

                                                    @foreach($sps as $sp)
                                                        <tr>

                                                        <td class="text-center">{{$stt++}}</td>
                                                        <td class="text-left">{{$sp->MaLapTop}}</td>
                                                        <td class="text-left">{{$sp->TenLapTop}}</td>
                                                        <td class="text-left">{{$sp->HangSX}}</td>
                                                            <td class="text-left">{{$sp->ManHinh}}</td>
                                                            <td class="text-left">{{$sp->RAM}}</td>
                                                            <td class="text-left">{{$sp->ROM}}</td>
                                                            <td class="text-left">{{$sp->CPU}}</td>
                                                        <td class="text-center">{{$sp->SoLuongConLai}}</td>
                                                        <td style="text-align: center" >
                                                            <a id="btn_row{{$stt}}" class=" btn_row btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom" name="sua">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row{{$stt}}" class="toggle">

                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label></label>
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
                                                                            <input type="text" class="form-control" value="{{$stt}}" >
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
                                                                            <input type="text" class="form-control" value="{{$stt}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn{{$stt}}" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                        @endforeach

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
@endsection
@section('content2')
<script>
    var j;
    var size=0;
    @foreach($sps as $sp)
            size++;
    @endforeach

    console.log(size);
    for(j=1;j<=size;j++)
    {
        $("#row"+j ).hide();
        //console.log("#row" + j);
    }

    var btn_row = {
        btn_row1: '1',
        btn_row2: '2',
        btn_row3: '3',
        btn_row4: '4',
        btn_row5: '5',
        btn_row6: '6',
        btn_row7: '7',
        btn_row8: '8',
        btn_row9: '9',
        btn_row10: '10',
        btn_row11: '11'

    };

    $('.btn_row').click(function () {
       var b= btn_row[this.id];//window[this.id];//btn_row[this.id];
        $('#row'+b).toggle();
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
@endsection
