<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>backend | Orderdetail</title>

    <!-- Bootstrap -->
    <link href="{{asset('/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/assets/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            @include('backend/menuleft')
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          @include('backend/header_b')
        </div>
        <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                  <div class="">
                    <div class="page-title">
                      <div class="title_left">
                        <h3>รายละเอียดรายการสั่งซื้อ</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="x_panel">
                          <div class="x_content">
                                <div class="col-xs-12">
                                  <div class="table-responsive">
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                          <th style="width:50%">รหัสรายการ :</th>
                                          <th style="width:50%">{!!$orders->OrderNo!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">From [buyer]: </th>
                                          <th style="width:50%">{!!$orders->buyer!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">To [seller] : </th>
                                          <th style="width:50%">{!!$orders->seller!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">จำนวนเงิน : </th>
                                          <th style="width:50%">{!!$orders->Total!!} บาท</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">paymentTerm : </th>
                                          <th style="width:50%">{!!$orders->PaymentTerm!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">วันที่ทำรายการ : </th>
                                          <th style="width:50%">{!!$orders->OrderDateTime!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">วันที่ลูกค้า comfirm : </th>
                                          <th style="width:50%">{!!$orders->ConfirmDateTime!!}</th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%">status : </th>
                                          <th style="width:50%">
                                            <?php if($orders->Status == 'CP') { ?>
                                              <button type="button" class="btn btn-success btn-xs">complete</button>
                                            <?php  }  ?>
                                            <?php if($orders->Status == 'WA') { ?>
                                              <button type="button" class="btn btn-warning btn-xs">On Process</button>
                                            <?php  }  ?>
                                            <?php if($orders->Status == 'HO') { ?>
                                              <button type="button" class="btn btn-warning btn-xs">Hold</button>
                                            <?php  }  ?>
                                            <?php if($orders->Status == 'NS') {  ?>
                                               <button type="button" class="btn btn-danger btn-xs">No complete</button>
                                            <?php } ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th style="width:50%"></th>
                                          <th style="width:50%"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <!-- /.col -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('/assets/vendors/nprogress/nprogress.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/assets/build/js/custom.min.js')}}"></script>
  </body>
</html>
